  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    body{
    margin-top: 50px;
}
        header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}
        
    </style>
    <title>PP Pages</title>
</head>
<body>
    @extends('header')
    <main>

        <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              <h1 class="fw-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PRODUITS PVC</font></font></h1>
              <p class="lead text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Le polychlorure de vinyle(PVC): <br> &nbsp;  est un polymère plastique polyvalent utilisé dans une grande variété d'applications en raison de ses propriétés uniques.</font></font></p>
              <select class="form-select" aria-label="Default select example">
                <option selected>Utilisation</option>
                <option value="1">Emballage </option>
                <option value="2">Textiles</option>
                <option value="3">Mobilier d'extérieur</option>
                <option value="'4'">Équipement médical</option>
                <option value="5">Composants automobiles</option>
                <option value="6">Applications électriques et électroniques</option>
                <option value="7">Articles ménagers </option>
                <option value="8">Tuyauterie et équipements industriels</option>
                <option value="9">Emballages alimentaires</option>
                <option value="10">Applications de conditionnement physique</option>
                <option value="10">Industrie de la construction</option>
              </select>
            </div>
          </div>
        </section>
        @if ($data->isEmpty())
        <h1>Article non trouvée</h1>
        @else
                <ul>
                    @foreach($data as $article)
                    <div class="album py-5 bg-light">
                        <div class="container">
                    
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ $article->image }}" alt="{{ $article->nomarticle }}"><br>
                                <div class="card-body">
                                <strong>Nom de l'article :</strong> {{ $article->nomarticle }}<br>
                                <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><strong>Description :</strong> {{ $article->description }}<br></font></p>
                                <strong>Prix :</strong> {{ $article->prix }}<br>
                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acheter</font></font></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Page d'acceuil</font></font></button>
                                    </div>
                                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 minutes</font></font></small>
                                </div>
                                </div>
                            </div>
                            </div>
                    @endforeach
                </ul>
        @endif
    </main>
    @include('footer')
</body>
</html>



