<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fees & settings | Platform admin</title>
<link href="styles/bootstrap.min.css" rel="stylesheet">
<link href="styles/adminst.css" rel="stylesheet"></head>
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<body><div class="d-md-flex">
<aside class="sidebar p-3"><div class="text-white fw-semibold fs-5 mb-3">Platform admin</div>
<nav class="nav flex-md-column gap-1"><a class="nav-link" href="admin2.html">Restaurants</a><a class="nav-link active" href="admin1.html">Users & disputes</a><a class="nav-link" href="admin3.html">Fees & settings</a><a class="nav-link" href="admin4.html">Reports</a><a class="nav-link" href="admin5.html">Menu moderation</a></nav></aside>
<main class="main flex-grow-1 p-3 p-md-4"><h1 class="h3 mb-4">Fees & settings</h1>
<form class="card card-body" style="max-width:640px">
<div class="row g-3">
<div class="col-sm-6"><label class="form-label">Default commission (%)</label><input type="number" class="form-control" value="10"></div>
<div class="col-sm-6"><label class="form-label">Platform service fee ($)</label><input type="number" class="form-control" value="0.50" step="0.01"></div>
<div class="col-sm-6"><label class="form-label">Delivery fee ($)</label><input type="number" class="form-control" value="2.00" step="0.01"></div>
<div class="col-sm-6"><label class="form-label">Tax rate (%)</label><input type="number" class="form-control" value="7.5" step="0.1"></div>
<div class="col-sm-6"><label class="form-label">Currency</label><select class="form-select"><option>USD</option><option>EUR</option><option>NGN</option></select></div>
<div class="col-sm-6"><label class="form-label">Support email</label><input type="email" class="form-control" value="help@example.com"></div>
<div class="col-12"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="r" checked><label class="form-check-label" for="r">Allow table reservations</label></div></div>
<div class="col-12"><button class="btn btn-accent">Save settings</button></div></div></form>
</main></div>
<script src="styles/bootstrap.bundle.min.js"></script></body></html>