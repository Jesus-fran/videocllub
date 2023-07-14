function showTrailer(element) {

    $('#trailerModal').modal('show');
    let id = $(element).data('id');
    let nombre = $(element).data('nombre');
    $('#trailerModalLabel').html(nombre);
    
    const settings = {
        async: true,
        crossDomain: true,
        url: 'https://imdb-top-100-movies.p.rapidapi.com/'+id,
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'a8f328fe37msh87443bf47cb29dfp1d3c08jsn08669a02c213',
            'X-RapidAPI-Host': 'imdb-top-100-movies.p.rapidapi.com'
        }
    };

    $.ajax(settings).done(function (response) {
        console.log(response);
        let trailer = response['trailer'];
        $('#body-trailer').attr('src', trailer);
    });
}

function home(){
    window.location.href = "/";
}

function searchCine(){
    console.log("Buscando cines");
}