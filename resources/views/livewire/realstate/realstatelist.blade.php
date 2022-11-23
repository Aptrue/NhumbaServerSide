<div>
    <div class="float-left">
     Float left on all viewport sizes
    </div><br>
    <div>
    <div class="float-right pb-2">
    <a href="{{ route('realstate.create.index') }}">
      <button type="button" class="btn btn-outline-dark" >
        <i class="fa fa-plus-circle" aria-hidden="true"></i>
        Adicionar novo
        </button>
    </a>
  </div>
    <table class="table table-striped shadow p-3 mb-5 bg-white rounded">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cidade</th>
            <th scope="col">Bairro</th>
            <th scope="col">Endereco</th>
            <th scope="col">N Quartos</th>
            <th scope="col">Corrector</th>
            <th scope="col">Data lanacamento</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($realstates as $realstate )
              <tr>
                  <th scope="row">{{$realstate->id}}</th>
                  <td>{{$realstate->city}}</td>
                  <td>{{$realstate->wood}}</td>
                  <td>{{$realstate->adress}}</td>
                  <td>{{$realstate->badrooms}}</td>
                  <td>{{$realstate->realtor->name}}</td>
                  <td>{{$realstate->created_at}}</td>
            </tr>
          @endforeach


        </tbody>
    </table>
     <div class="row text-center">
                <!-- PAGINATION START -->
                <div class="col-12 mt-4">
                    <div class="d-md-flex align-items-center text-center justify-content-between">
                        <span class="text-muted me-3"><i class="ti ti-unlink"></i></span>
                        <div class="pagination mb-0 justify-content-center mt-4 mt-sm-0">
                          {{ $realstates->links() }}
                         </div>
                    </div>
                </div><!--end col-->
                <!-- PAGINATION END -->
            </div>
</div>
</div>
