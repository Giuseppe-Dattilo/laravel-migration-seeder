@extends('layouts.main')

@section('title','Home')

@section('main-content')
   <section id="trains">
        <div class="container">
            <table class="table table-dark my-5">
                <thead>
                  <tr class="main-row">
                    <th scope="col">Compagnia</th>
                    <th scope="col">Stazione di Partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di Partenza</th>
                    <th scope="col">Codice</th>
                    <th scope="col">Numero Carrozza</th>
                    <th scope="col">Ritardo</th>
                    <th scope="col">Stato</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                  <tr class="tab-row">
                    <th scope="col">{{ $train->azienda }}</th>
                    <th scope="col">{{ $train->stazione_partenza }}</th>
                    <th scope="col">{{ $train->stazione_arrivo }}</th>
                    <th scope="col">{{ $train->orario_partenza }}</th>
                    <th scope="col">{{ $train->orario_arrivo }}</th>
                    <th scope="col">{{ $train->n_carrozza }}</th>
                    <th scope="col">{{ $train->in_orario }}</th>
                    <th scope="col">{{ $train->cancellato }}</th>        
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </section>
@endsection
    