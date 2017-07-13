<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painel\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $product;

   public function __construct(Product $product)
   {
       $this->product = $product;
      }


    public function index()
    {
        $title = 'Product List';
        $products = $this->product->all();

        return view('painel.products.index', compact('products','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function  test(){
        /*
        $prod = $this->product;
        $prod->name = 'Npme do Produto';
        $prod->number = 131312;
        $prod = active = true;
        $prod->category = 'eletronic';
        $prod->description = 'Description of product';

        $insert = $prod->save();

        if($insert)
            return 'Sucesso'

        else
            return 'Erro'


        */

        /*
       $insert = $this->product->create([
            'name' => 'Detergente',
            'number' => 434548,
            'active' => true,
            'category' => 'Clear',
            'description' => 'Clear Product'

        ]);

        if($insert)
            return "Sucesso, ID: {$insert->id}";

        else
            return 'Erro';*/
        /*
        $prod = $this->product->find(2);
        $prod->name = 'Npme do Produto';
        $prod->number = 131312;
        $prod = active = true;
        $prod->category = 'eletronic';
        $prod->description = 'Description of product';
        $update = $prod->save();
        if($update)
            return "Sucesso";

        else
            return 'Erro';*/
        /*
        $prod = $this->product->find(2);
        $update = $prod->update([
            'name' => 'Detergente',
            'number' => 434548,
            'active' => true,
            'category' => 'Clear',
            'description' => 'Clear Product'
        ]);

        if($update)
            return "Atualizado Sucesso";

        else
            return 'Erro';*/
        /*
        $update = $this->product->where('number',123 )->update([
            'name' => 'Detergente',
            'number' => 434548,
            'active' => true,
            'category' => 'Clear',
            'description' => 'Clear Product',
        ]);

        if($update)
            return "Atualizado Sucesso";

        else
            return 'Erro';*/



        /*
         *
        $prod = $this->product->find(2);
        $delete = $prod->delete();

        if($delete)
            return "Deletado com Sucesso";

        else
            return 'Erro';

        $delete = $this->product
            ->where('number',123)
            ->delete();

        if($delete)
            return "Deletado com Sucesso";

        else
            return 'Erro';*/
    }
}
