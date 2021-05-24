@extends('layouts.pages')

@section('title', 'Bus')
@section('content')
    @php
        $title = "Prices";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>

    <section>
        <div class="mx-auto flex flex-row max-w-6xl ">
            <div class="table-title">
                <h1 class="text-4xl pb-2 text-left font-semibold">BUSBESCHRIFTUNGEN</h1>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl ">
            <div class="bus-wrapping-pricing-table">
                <table class="border-collapse border border-green-800 lg:min-w-full">
                  <thead class="bg-gray-100 text-titleRed text-xl">
                    <tr class="">
                      <th class="border border-gray-200	 py-2"></th>
                      <th class="border border-gray-200 py-2"> ANGEBOTSINHALT </th>
                      <th class="border border-gray-200 py-2"> PREIS </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-8"> Teilheck Fenster </td>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-16 py-2 font-light"> - Window- /Lochfolie<br> - Druck 4-farbig<br> - Montage vor Ort (Region ZVV)<br> - Fläche: ca. 2300mm x 870mm<br> *exkl. Demontage (wird bei Bedarf separat verrechnet) </td>
                      <td class="border border-gray-200 lg:px-4 font-semibold"> CHF 520.- </td>
                    </tr>
                    <tr>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-8"> Teilheck Carrosserie </td>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-16 py-2 font-light"> - Fahrzeug-Klebefolie PVC Premium<br> (mit Luftkanal)<br> - Druck 4-farbig<br>- Montage vor Ort (Region ZVV)<br> - Fläche: ca. 2300mm x 1020mm<br> *exkl. Demontage (wird bei Bedarf separat verrechnet) </td>
                      <td class="border border-gray-200 lg:px-4 font-semibold"> CHF 520.- </td>
                    </tr>
                    <tr>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-8"> Ganzheck </td>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-16 py-2 font-light"> - Window-Lochfolie / Fahrzeug-Klebefolie PVC Premium (mit Luftkanal)<br> - Druck 4-farbig, 2-teilig<br>- Montage vor Ort (Region ZVV)<br>- Fläche: ca. 2300mm x 2210mm<br>*exkl. Demontage (wird bei Bedarf separat verrechnet) </td>
                      <td class="border border-gray-200 lg:px-4 font-semibold"> CHF 1150.- </td>
                    </tr>
                    <tr>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-8"> Dachlängswerbung - Autobus	</td>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-16 py-2 font-light"> - Fahrzeug-Klebefolie PVC Premium<br> (mit Luftkanal)<br> - Druck 4-farbig<br> - Montage vor Ort (Region ZVV)<br> - Fläche: 837mm x 30mm rechts | 919,4mm x 38,5mm links<br> *exkl. Demontage (wird bei Bedarf separat verrechnet) </td>
                      <td class="border border-gray-200 lg:px-4 font-semibold">CHF 750.-</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-8"> Dachlängswerbung - Gelenkbus </td>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-16 py-2 font-light"> - Klebefolie PVC Premium (mit Luftkanal)<br> - Druck 4-farbig<br> - Montage vor Ort (Region ZVV)<br> - Fläche: 598mm + 646mm x 33,5mm rechts | 773mm + 566mm x 33,5mm links <br> *exkl. Demontage(wird bei Bedarf separat verrechnet) </td>
                      <td class="border border-gray-200 lg:px-4 font-semibold">CHF 1250.-</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
