<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>Dashboard RH</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f6f9;
}

.card-stat{
border:0;
border-radius:16px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.3s;
cursor:pointer;
}

.card-stat:hover{
transform:translateY(-5px);
}

.big-number{
font-size:28px;
font-weight:bold;
}

.filter-btn{
margin:5px;
border-radius:20px;
}

.section-title{
font-weight:bold;
margin-top:30px;
margin-bottom:15px;
}

.badge-custom{
font-size:14px;
padding:8px 12px;
border-radius:20px;
}

.hidden{
display:none;
}

.chart-box{
background:white;
border-radius:16px;
padding:20px;
box-shadow:0 10px 20px rgba(0,0,0,0.05);
}

</style>
</head>

<body>

<div class="container py-4">

<h2 class="mb-4">📊 Dashboard RH</h2>

<!-- FILTERS -->
<div class="mb-3">

<button class="btn btn-primary filter-btn" onclick="filter('all')">Tous</button>
<button class="btn btn-outline-primary filter-btn" onclick="filter('gender')">Sexe</button>
<button class="btn btn-outline-primary filter-btn" onclick="filter('age')">Âge</button>
<button class="btn btn-outline-primary filter-btn" onclick="filter('job')">Poste</button>
<button class="btn btn-outline-primary filter-btn" onclick="filter('contract')">Contrat</button>
<button class="btn btn-outline-primary filter-btn" onclick="filter('absence')">Absences</button>

</div>

<!-- STATS GRID -->
<div class="row g-3">

<!-- TOTAL -->
<div class="col-md-3 stat all">
<div class="card card-stat p-3 text-center">
<h6>Total employés</h6>
<div class="big-number" id="totalEmployees">120</div>
</div>
</div>

<!-- SEXE -->
<div class="col-md-3 stat gender">
<div class="card card-stat p-3 text-center">
<h6>Hommes</h6>
<div class="big-number">70</div>
</div>
</div>

<div class="col-md-3 stat gender">
<div class="card card-stat p-3 text-center">
<h6>Femmes</h6>
<div class="big-number">50</div>
</div>
</div>

<!-- AGE -->
<div class="col-md-3 stat age">
<div class="card card-stat p-3 text-center">
<h6>Moins de 30 ans</h6>
<div class="big-number">35</div>
</div>
</div>

<div class="col-md-3 stat age">
<div class="card card-stat p-3 text-center">
<h6>30 - 45 ans</h6>
<div class="big-number">55</div>
</div>
</div>

<div class="col-md-3 stat age">
<div class="card card-stat p-3 text-center">
<h6>+45 ans</h6>
<div class="big-number">30</div>
</div>
</div>

<!-- POSTE -->
<div class="col-md-3 stat job">
<div class="card card-stat p-3 text-center">
<h6>Cadres</h6>
<div class="big-number">40</div>
</div>
</div>

<div class="col-md-3 stat job">
<div class="card card-stat p-3 text-center">
<h6>Agents</h6>
<div class="big-number">80</div>
</div>
</div>

<!-- CONTRAT -->
<div class="col-md-3 stat contract">
<div class="card card-stat p-3 text-center">
<h6>CDI</h6>
<div class="big-number">90</div>
</div>
</div>

<div class="col-md-3 stat contract">
<div class="card card-stat p-3 text-center">
<h6>CDD</h6>
<div class="big-number">20</div>
</div>
</div>

<div class="col-md-3 stat contract">
<div class="card card-stat p-3 text-center">
<h6>Stage</h6>
<div class="big-number">10</div>
</div>
</div>

<!-- ABSENCES -->
<div class="col-md-3 stat absence">
<div class="card card-stat p-3 text-center">
<h6>Absences totales</h6>
<div class="big-number">45</div>
</div>
</div>

<div class="col-md-3 stat absence">
<div class="card card-stat p-3 text-center">
<h6>Absences maladie</h6>
<div class="big-number">18</div>
</div>
</div>

<div class="col-md-3 stat absence">
<div class="card card-stat p-3 text-center">
<h6>Absences injustifiées</h6>
<div class="big-number">12</div>
</div>
</div>

</div>

<!-- ANALYTICS SECTION -->
<h4 class="section-title">📈 Analyse rapide</h4>

<div class="row g-3">

<div class="col-md-6">
<div class="chart-box">
<h5>Répartition globale</h5>
<ul>
<li>👨 Hommes dominants : 58%</li>
<li>👩 Femmes : 42%</li>
<li>📊 CDI majoritaires</li>
<li>🏢 Forte concentration agents</li>
</ul>
</div>
</div>

<div class="col-md-6">
<div class="chart-box">
<h5>Alertes RH</h5>

<span class="badge bg-danger badge-custom">5 Retraites proches</span>
<span class="badge bg-warning text-dark badge-custom">8 Absences longues</span>
<span class="badge bg-info text-dark badge-custom">3 Promotions en attente</span>
<span class="badge bg-success badge-custom">RH stable</span>

</div>
</div>

</div>

</div>

<script>

function filter(type){

let all = document.querySelectorAll('.stat');

all.forEach(el => el.classList.add('hidden'));

if(type === 'all'){
all.forEach(el => el.classList.remove('hidden'));
return;
}

document.querySelectorAll('.' + type).forEach(el => {
el.classList.remove('hidden');
});

}

</script>

</body>
</html>