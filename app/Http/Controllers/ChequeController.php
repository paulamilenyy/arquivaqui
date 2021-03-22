<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Cheque;
use Auth;


class ChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');//usa p todas as outras rotas, a autorização
    }
    public function index()
    {
        $cheques=Cheque::paginate(10);
        return view('cheques.home',['cheques'=>$cheques]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cheques.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //caso o usuário decida acrescentar a imagem do cheque, esse codigo abaixo faz isso
        if ($request->hasFile('foto')) {
            //  Let's do everything here
            if ($request->file('foto')->isValid()) {
                //abaixo é especificado as estenções e o tamanho maximo da foto do cheque
                $validated = $request->validate([
                    'foto' => 'mimes:jpg,jpeg,bmp,sbg,png|max:5000',
                ]);
                $profileuploaded=request()->file('foto');
                $profilename = time() . '.' . $profileuploaded->getClientOriginalExtension();
                $profilepath = public_path('/assets/img/');
                $profileuploaded->move($profilepath,$profilename);
                $foto= '/assets/img/' . $profilename;
                $banco=$request->post('banco');
                $n=$request->post('n');
                $dt_venc=$request->post('dt_venc');
                $valor=$request->post('valor');
                $nome_pes=$request->post('nome_pes');
                $recebi=$request->post('recebi');
                $pass_p=$request->post('pass_p');
        

                $cheque=new Cheque;
                $cheque->foto=$foto;
                $cheque->banco=$banco;
                $cheque->numero=$n;
                $cheque->data_vencimento=$dt_venc;
                $cheque->valor=$valor;
                $cheque->nome_pessoa=$nome_pes;
                $cheque->recebido_de=$recebi;
                $cheque->passei_para=$pass_p;
                $cheque->user_id=Auth::user()->id;
                $cheque->save();
                return redirect()->to(route('cheques.index'));
       
            
            }
        }
        
        //caso o usuario nao queira inserir a foto:
        $foto=$request->post('foto');
        $banco=$request->post('banco');
        $n=$request->post('n');
        $dt_venc=$request->post('dt_venc');
        $valor=$request->post('valor');
        $nome_pes=$request->post('nome_pes');
        $recebi=$request->post('recebi');
        $pass_p=$request->post('pass_p');
        

        $cheque=new Cheque;
        $cheque->foto=$foto;
        $cheque->banco=$banco;
        $cheque->numero=$n;
        $cheque->data_vencimento=$dt_venc;
        $cheque->valor=$valor;
        $cheque->nome_pessoa=$nome_pes;
        $cheque->recebido_de=$recebi;
        $cheque->passei_para=$pass_p;
        $cheque->user_id=Auth::user()->id;
        $cheque->save();
        return redirect()->to(route('cheques.index'));
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cheque $cheque)
    {
        //return view('cheques.show');
        return view('cheques.show',['cheque'=>$cheque]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
    
     */
    public function edit(Cheque $cheque)
    {
        //return view('cheques.edit');
        return view('cheques.edit',['cheque'=>$cheque]);
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
          
        //caso o usuário decida acrescentar a imagem do cheque, esse codigo abaixo faz isso
        if ($request->hasFile('foto')) {
            if ($request->file('foto')->isValid()) {
                //abaixo é especificado as estenções e o tamanho maximo da foto do cheque
                $validated = $request->validate([
                    'foto' => 'mimes:jpg,jpeg,bmp,sbg,png|max:5000',
                ]);
                
                $profileuploaded=request()->file('foto');
                $profilename = time() . '.' . $profileuploaded->getClientOriginalExtension();
                $profilepath = public_path('/assets/img/');
                $profileuploaded->move($profilepath,$profilename);
                $foto= '/assets/img/' . $profilename;

                //pegar informações do form:
                $banco=$request->post('banco');
                $n=$request->post('n');
                $dt_venc=$request->post('dt_venc');
                $valor=$request->post('valor');
                $nome_pes=$request->post('nome_pes');
                $recebi=$request->post('recebi');
                $pass_p=$request->post('pass_p');
        
                //busca no bd para cheque
                 $cheque=Cheque::find($id);
                $cheque->foto=$foto;
                $cheque->banco=$banco;
                $cheque->numero=$n;
                $cheque->data_vencimento=$dt_venc;
                $cheque->valor=$valor;
                $cheque->nome_pessoa=$nome_pes;
                $cheque->recebido_de=$recebi;
                $cheque->passei_para=$pass_p;
                $cheque->user_id=Auth::user()->id;
                $cheque->save();
                return redirect()->to(route('cheques.index'));
       
            
            }
        }
        
        
        
        //busca no bd para cheque
        $cheque=Cheque::find($id);
        //pega informacoes do form:
        //$foto=$request->post('foto');
        $banco=$request->post('banco');
        $n=$request->post('n');
        $dt_venc=$request->post('dt_venc');
        $valor=$request->post('valor');
        $nome_pes=$request->post('nome_pes');
        $recebi=$request->post('recebi');
        $pass_p=$request->post('pass_p');
        //atualiza o registro
        //$cheque->foto=$foto;
        $cheque->banco=$banco;
        $cheque->numero=$n;
        $cheque->data_vencimento=$dt_venc;
        $cheque->valor=$valor;
        $cheque->nome_pessoa=$nome_pes;
        $cheque->recebido_de=$recebi;
        $cheque->passei_para=$pass_p;
        $cheque->user_id=Auth::user()->id;
        
        //operacao realizada no bd
        $cheque->save();
        return redirect()->to(route('cheques.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cheque=Cheque::find($id);
        $cheque->delete();
        return redirect()->to(route('cheques.index'));
    }
}