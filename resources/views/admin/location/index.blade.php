@section('location-active', 'active')
@section('location', 'active')
@section('location', 'show')
@extends('layouts.backend.app',[
    'title' => 'List Location',
    'pageTitle' => 'List Location',
])
@push('css')
<link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')
<style>
    .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
    }
    #map {
        height: 800px;
    }
    .gm-style{
        font:unset !important;
        color: black;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
           <div id="map"></div>
        </div>
    </div>
</div>
@stop

@push('js')
<script>
    let map, activeInfoWindow, markers = [];

        /* ----------------------------- Initialize Map ----------------------------- */
        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: 12.740560632891588, 
                    lng: 105.12096244074966
                },
                zoom:8.1
            });

            map.addListener("click", function(event) {
                mapClicked(event);
            });

            initMarkers();
        }

        /* --------------------------- Initialize Markers --------------------------- */
        function initMarkers() {
            const initialMarkers = <?php echo json_encode($initialMarkers); ?>;

            for (let index = 0; index < initialMarkers.length; index++) {

                const markerData = initialMarkers[index];
                const marker = new google.maps.Marker({
                    position: markerData.position,
                    label: markerData.label,
                    // draggable: markerData.draggable,
                    map
                });
                markers.push(marker);

                const infowindow = new google.maps.InfoWindow({
                    content:   `<b>Province: ${markerData.position.province}</b><br>
                                <b>District: ${markerData.position.district}</b><br>
                                <b>Commune: ${markerData.position.commune}</b><br>
                                <b>Village: ${markerData.position.village}</b><br>
                                <b>Owner: ${markerData.position.owner}</b><br>
                                <b><img src="${markerData.position.image}" alt="Home" style="width: 100px"></b><br>
                                `,
                });
                marker.addListener("click", (event) => {
                    if(activeInfoWindow) {
                        activeInfoWindow.close();
                    }
                    infowindow.open({
                        anchor: marker,
                        shouldFocus: false,
                        map
                    });
                    activeInfoWindow = infowindow;
                    markerClicked(marker, index);
                });

                marker.addListener("dragend", (event) => {
                    markerDragEnd(event, index);
                });
            }
        }

        /* ------------------------- Handle Map Click Event ------------------------- */
        function mapClicked(event) {
            console.log(map);
            console.log(event.latLng.lat(), event.latLng.lng());
        }

        /* ------------------------ Handle Marker Click Event ----------------------- */
        function markerClicked(marker, index) {
            console.log(map);
            console.log(marker.position.lat());
            console.log(marker.position.lng());
        }

        /* ----------------------- Handle Marker DragEnd Event ---------------------- */
        function markerDragEnd(event, index) {
            console.log(map);
            console.log(event.latLng.lat());
            console.log(event.latLng.lng());
        }
    </script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
@endpush
