<?php
	/**
	 * Created by PhpStorm.
	 * User: bg
	 * Date: 19.05.15
	 * Time: 23:45
	 */

	namespace Conpago\Console;


	use Conpago\DI\IContainerBuilder;
	use Conpago\DI\IModule;

	class ConsoleModule implements IModule {

		public function build( IContainerBuilder $builder ) {
			$builder
				->registerType('Conpago\Console\Presentation\ConsolePresenter')
				->asA('Conpago\Console\Contract\Presentation\IConsolePresenter');

			$builder
				->registerType('Conpago\Console\HelpCommand')
				->asA('Conpago\Console\Contract\ICommand');

			$builder
				->registerType('Conpago\Console\Presentation\HelpCommandPresenter')
				->asA('Conpago\Console\Contract\Presentation\IHelpCommandPresenter');

			$builder
				->registerType('Conpago\Console\ConsoleApp')
				->asA('Conpago\Contract\IApp');
		}
	}
