@section('plugins.Chartjs', true)
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Criar imovel</h1>
@stop

@section('content')
<form class="shadow p-3 mb-5 bg-white rounded" method="POST" action="{{ route('realstate.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Provncia</label>
                <select class="form-control" id="exampleFormControlSelect1" name="province">
                <option  value="Sofala">Sofala</option>
                <option  value="Maputo">Maputo</option>
                </select>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Cidade</label>
                <select class="form-control" id="exampleFormControlSelect1" name="city" required>
                <option value="Beira">Beira</option>
                <option value="Maputo">Maputo</option>
                </select>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Bairro</label>
                <select class="form-control" id="exampleFormControlSelect1" name="wood" required>
                <option value="Munhava">Munhava</option>
                <option value="Esturro">Esturo</option>
                <option value="Matacuane">Matacuane</option>
                <option value="Estoril">Estoril</option>
                <option value="Esturro">Pontagea</option>
                </select>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Tipo</label>
                <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                <option value="3">3</option>
                <option value="Duplex">Duplex</option>
                </select>
            </div>
        </div>


  </div>


  <div class="row">
       <div class="col">
          <label for="exampleFormControlInput1">Para efeito de?</label>
          <select class="form-control" id="exampleFormControlSelect1" name="utility" required>
                <option value="venda">venda</option>
                <option value="Arrenda-se">Renda</option>
          </select>
       </div>
       <div class="col">
          <label for="exampleFormControlInput1">Preco</label>
          <input class="form-control" type="number" placeholder="0" name="price" required>
       </div>
        <div class="col">
          <label for="exampleFormControlInput1">Numero de Quartos</label>
          <input class="form-control" type="number" placeholder="0" name="rooms">
       </div>
        <div class="col">
          <label for="exampleFormControlInput1">Numero de Quartos de banho</label>
          <input class="form-control" type="number" placeholder="0" name="badrooms">
       </div>
  </div>

  <div class="row">
        <div class="col">
         <div class="col">
          <label for="exampleFormControlInput1">Endereco</label>
          <input class="form-control" type="text" placeholder="0" name="adress">
        </div>
        </div>
         <div class="col">
         <div class="col">
          <label for="exampleFormControlInput1">Condicoes do imovel</label>
          <input class="form-control" type="text" placeholder="0" name="condition">
        </div>
        </div>

  </div>

  <div class="row">
     <div class="col">
         <div class="col">
          <label for="exampleFormControlInput1">Imagem de Capa</label>
          <input type="file" class="form-control-file" name="img" id="image">
        </div>
     </div>
      <div class="col">
         <div class="col">
          <label for="exampleFormControlInput1">Outras Images (multipla)</label>
          <input class="form-control" type="file" id="formFileMultiple" multiple  name="imgs[]" id="images">
        </div>
     </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descricao</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>

   <div class="float-right pb-2">
   <input type="submit" value="Criar Imovel">
   </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
