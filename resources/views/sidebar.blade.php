<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sidebar</title>
</head>
<body>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; ">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Products</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="/articles/pet" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              PET
              <p>Polyéthylène Téréphtalate</p>
            </a>
          </li>
          <li>
            <a href="/articles/pehd" class="nav-link text-white" >
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              HDPE
              <p>Polyéthylène Haute Densité</p>
            </a>
          </li>
          <li>
            <a href="/articles/pvc" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              PVC
              <p>Chlorure de polyvinyle</p>
            </a>
          </li>
          <li>
            <a href="/articles/ldpe" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              LDPE
              <p>Polyéthylène Basse Densité</p>
            </a>
          </li>
          <li>
            <a href="/articles/pp" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
              PP
              <p>Polypropylène</p>
            </a>
          </li>
          <li>
            <a href="/articles/ps" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
              PS
              <p>Polystyrène</p>
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Users</strong>
          </a>
        </div>
      </div>
</body>
</html>