<?php

namespace App\Http\Controllers;

use App\Http\Requests\Painel\ProductFormRequest;
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
    private $totalPage = 5;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }


    public function index()
    {
        $title = 'Product List';
        $products = $this->product->paginate($this->totalPage);

        return view('painel.products.index', compact('products', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "New Product";
        $category = ['eletronic', 'clear', 'shower'];
        return view('painel.products.create-edit', compact('title', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param ProductFormRequest $request
     * @return \Illuminate\Http\Response
     */

    public function store(ProductFormRequest $request)
    {
        //dd($request->all());
        //dd($request->only(['name', 'number']));
        //dd($request->except(['_token', 'category']));
        //dd($request->input('name'));


        // if($dataForm['active'] == '')
        //$dataForm['active'] = 0;
        // else
        // $dataForm['active'] = 1;

        //Pega todos os dados que vem do formu
        $dataForm = $request->all();

        $dataForm['ative'] = (!isset($dataForm['active'])) ? 0 : 1;

        //valida dados
        //$this->validate($request, $this->product->rules );

       /*
        $messages = [
            'name.required' => 'Campo nome obrigatorio',
            'number.numeric' => 'Somente número',
            'number.required' => 'Campo número é obrigatório',
            ];*/

        /*$validate = validator($dataForm, $this->product->rules);
        if ($validate->fails()) {
            return redirect()
                ->route('produtos.create')
                ->withErrors($validate)
                ->withInput();
            }*/


            $insert = $this->product->create($dataForm);

            if ($insert)

                return redirect()->route('produtos.index');

            else
                return redirect()->back();

        }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $product = $this->product->find($id);

       $title = "Product: {$product->name}"; 

       return view('painel.products.show', compact('product', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = $this->product->find($id);
        $title = "Edit Product: {$product->name} ";
        $category = ['eletronic', 'clear', 'shower'];
        return view('painel.products.create-edit', compact('title', 'category', 'product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id)
    {
        //recupera todos os dados do form
        $dataForm = $request->all();
        //pega o item para editar
        $product = $this->product_>find($id);
        //verifica produto ativo
        $dataForm['ative'] = (!isset($dataForm['active'])) ? 0 : 1;
        //alterar
        $update = $product->update($dataForm);

        //verificaçao se editou
        if ($update) 
            return redirect()->route('produtos.index');
        else
            return redirect()->route('produtos.edit', $id)->with(['errors'=>'Edit Error']);

            # code...
        
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->product->find($id);

        $delete = $product->delete();

        if ($delete) 
            return redirect()->route('produtos.index');
        else
            return redirect()->route('produtos.show', $id)->with(['errors'=>'Delete Error']);


    }

    public function test()
    {
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
