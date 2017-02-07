<?php
	use NoahBuscher\Macaw\Macaw;
	
	Macaw::get('','HomeController@index');

	Macaw::get('view/(:num)','HomeController@view');

	Macaw::get('(:any)',function($fu){
		echo '未匹配到路由<br/>'.$fu;
	});

	Macaw::dispatch();