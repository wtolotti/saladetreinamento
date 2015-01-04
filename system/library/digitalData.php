<?php 


//   window.digitalData = {
//     site: {
//         name: 'Loja Móvel Vivo',
//         domain: 'm.lojavivo.com.br',
//         test: true,
//         currency: 'BRL',
//         mobile: true
//     },
//     page: {
//         name: document.title,
//         referrer: document.referrer,
//         url: location.href,
//         protocol: location.protocol,
//         pathname: location.pathname,
//         querystring: location.search,
//         step: 'Home'
//     },
//     tms: {
//         dataLayerVersion: 1.0,
//         location: '//commondatastorage.googleapis.com/dp6tagbox-vivo/lojaonline/'
//     }
// };

/**
* Create Data Layer in script JS
*/
class DigitalData
{
	
	function defaultData(){
		$data = array(
			"site" => array(
				"name" => "Teste",
				"domain" => "document.domain"
			)

		);
		
		return $data;
	}	

}

?>