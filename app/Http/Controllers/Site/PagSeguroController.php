<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use FlyingLuscas\Correios\Client;
use FlyingLuscas\Correios\Services\ZipCode;
use PagSeguro; //Utilize a Facade

class PagSeguroController extends Controller
{
	public function action_boletoPGS(Request $request)
	{
		$correios = new Client;
		$data = $correios->zipcode()
			->find($request->cep);
		
		// dd(mb_detect_encoding($data['street']));
		dd(Str::camel(Str::slug('62.979.453/0001-69')));


		$data['street'] = Str::title(Str::slug($data['street'], ' '));
		
		$data['city'] = Str::title(Str::slug($data['city'], ' '));

		$data['district'] = Str::title(Str::slug($data['district'], ' '));


		$arr = [];
		for ($i=0; $i < 2; $i++) {
			array_push($arr,
				[
					'itemId' => '876876',
					'itemDescription' => 'Nome do Item',
					'itemAmount' => 50.00, //Valor unitário
					'itemQuantity' => '2', // Quantidade de itens
				]
			);
		}


		$pagseguro = PagSeguro::setReference(date('YmdHis'))
		->setSenderInfo([
			'senderName' => 'Alex Cleiton Soares', //Deve conter nome e sobrenome
			'senderPhone' => '96984058000', //Código de área enviado junto com o telefone
			'senderEmail' => 'alexcleiton16@hotmail.com',
			'senderHash' => $request->pagseguro_token,
			// 'senderCPF' => '01489159223', //Ou CNPJ se for Pessoa Júridica
			'senderCNPJ' => '05325378000189' //Ou CNPJ se for Pessoa Júridica
		])
		->setShippingAddress([ // OPCIONAL
			'shippingAddressStreet' => $data['street'],
			//'shippingAddressNumber' => $request->numero,
			'shippingAddressNumber' => 1,
			'shippingAddressDistrict' => $data['district'],
			'shippingAddressPostalCode' => $data['zipcode'],
			'shippingAddressCity' => $data['city'],
			'shippingAddressState' => $data['uf']
		])
		->setItems($arr)
		->send([
			'paymentMethod' => 'boleto'
		]);
		
		dd($pagseguro);
		// return response()->json($data, 200)->header('Content-Type', 'application/json');
		return redirect($pagseguro->paymentLink);
	}
}