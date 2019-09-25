<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    
    public function index()
    {
        return Content::all();
    }

    public function show(Content $id)
    {
        return $id;
    }

    public function create(Request $request)
    {
        $contentData = $request->all();

        $content = new Content();
        $content->title     = $contentData['title'];
        $content->autores   = json_encode($contentData['autores']);
        $content->conteudos_relacionados = json_encode($contentData['conteudos_relacionados']);
        $content->save();

        return ['msg' => 'Conteudo criado com sucesso'];
    }

    public function update(Request $request, $id)
    {
        $contentData = $request->all();
        $content     = Content::find($id);
        $content->update($contentData);

        return ['msg' => 'Conteudo atualizado'];
    }

    public function delete(Content $id)
    {
        $id->delete();
        return ['msg' => 'Conteudo Deletado'];
    }
}
