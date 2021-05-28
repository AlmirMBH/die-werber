@extends('layouts.pages')

@section('title', 'Bus')
@section('content')
    @php
        $title = "Prices";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>

    <section>
        <div class="mx-auto flex flex-row max-w-6xl ">
            <div class="bus-wrapping-pricing-table px-2 mx-auto">
                <div class="table-title">
                    <h1 class="text-4xl text-left font-semibold text-center md:text-left pb-2">BUSBESCHRIFTUNGEN</h1>
                </div>
                <table class="border-collapse border border-green-800 lg:min-w-full">
                  <thead class="bg-gray-100 text-titleRed text-xl">
                    <tr class="">
                      <th class="border border-gray-200	 py-2"></th>
                      <th class="text-center border border-gray-200 py-2 px-2">ANGEBOTSINHALT</th>
                      <th class="text-center border border-gray-200 py-2 px-2">PREIS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-8 px-2">Teilheck Fenster</td>
                      <td class="font-light border border-gray-200 lg:pl-8 lg:pr-16 py-2 px-2">- Window- /Lochfolie<br> - Druck 4-farbig<br> - Montage vor Ort (Region ZVV)<br> - Fläche: ca. 2300mm x 870mm<br> *exkl. Demontage (wird bei Bedarf separat verrechnet)</td>
                      <td class="text-center font-semibold border border-gray-200 px-2">CHF 520.-</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-8 px-2">Teilheck Carrosserie</td>
                      <td class="font-light border border-gray-200 lg:pl-8 lg:pr-16 py-2 px-2">- Fahrzeug-Klebefolie PVC Premium<br> (mit Luftkanal)<br> - Druck 4-farbig<br>- Montage vor Ort (Region ZVV)<br> - Fläche: ca. 2300mm x 1020mm<br> *exkl. Demontage (wird bei Bedarf separat verrechnet)</td>
                      <td class="text-center font-semibold border border-gray-200 px-2">CHF 520.-</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-8 px-2">Ganzheck</td>
                      <td class="font-light border border-gray-200 lg:pl-8 lg:pr-16 py-2 px-2">- Window-Lochfolie / Fahrzeug-Klebefolie PVC Premium (mit Luftkanal)<br> - Druck 4-farbig, 2-teilig<br>- Montage vor Ort (Region ZVV)<br>- Fläche: ca. 2300mm x 2210mm<br>*exkl. Demontage (wird bei Bedarf separat verrechnet)</td>
                      <td class="font-semibold border border-gray-200 text-center px-2">CHF 1150.-</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-8 px-2">Dachlängswerbung - Autobus</td>
                      <td class="font-light border border-gray-200 lg:pl-8 lg:pr-16 py-2 px-2">- Fahrzeug-Klebefolie PVC Premium<br> (mit Luftkanal)<br> - Druck 4-farbig<br> - Montage vor Ort (Region ZVV)<br> - Fläche: 837mm x 30mm rechts | 919,4mm x 38,5mm links<br> *exkl. Demontage (wird bei Bedarf separat verrechnet)</td>
                      <td class="font-semibold text-center border border-gray-200 px-2">CHF 750.-</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-200 lg:pl-8 lg:pr-8 px-2">Dachlängswerbung - Gelenkbus</td>
                      <td class="font-light border border-gray-200 lg:pl-8 lg:pr-16 py-2 px-2">- Klebefolie PVC Premium (mit Luftkanal)<br> - Druck 4-farbig<br> - Montage vor Ort (Region ZVV)<br> - Fläche: 598mm + 646mm x 33,5mm rechts | 773mm + 566mm x 33,5mm links <br> *exkl. Demontage(wird bei Bedarf separat verrechnet)</td>
                      <td class="font-semibold text-center border border-gray-200 px-2">CHF 1250.-</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
