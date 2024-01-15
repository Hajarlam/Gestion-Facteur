@php use Illuminate\Support\Facades\Route; @endphp
<h1></h1>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <h4>
                        
                    <a class="nav-link {{ !Route::is('dashboard') ?: 'bg-primary' }}"  style=" color:black ;"  aria-current="page"
                       href="{{route('dashboard')}}"> <svg class="bi me-2" width="20" height="20" fill="currentColor">
                            <path d="m16,2v2h-4v-2h4m-10,0v6H2V2h4m10,8v6h-4v-6h4m-10,4v2H2v-2h4M18,0h-8v6h8V0Zm-10,0H0v10h8V0Zm10,8h-8v10h8v-10Zm-10,4H0v6h8v-6Z"/>            
                                        </svg>Dashboard</a></h4>
                </li>
                

                <li class="nav-item"><h4>
    <a class="nav-link {{ !Route::is('company') && !Route::is('company') ?: 'bg-primary text-white' }}" style=" color:black ;" 
       aria-current="page" data-bs-toggle="collapse" href="#productAccordion" role="button"
       aria-expanded="false" aria-controls="productAccordion"> <svg class="bi me-2" width="16" height="16" fill="currentColor">
                            <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/>
                            </svg>Entreprise</a></h4>
    <div class="collapse" id="productAccordion">
        <ul class="nav flex-column"><h5>
            <li class="nav-item" style="margin-left: 10px;">
                <a class="nav-link {{ Route::is('emetteurs') ? 'bg-primary text-white' : '' }}"
                href="{{ route('emetteurs') }}">Emmeteur</a>
            </li>
        </ul>
    </div>
</li> 

          <li class="nav-item"><h4>
                    <a class="nav-link {{ !Route::is('paiement') ?: 'bg-primary text-white' }}"  style=" color:black ;" aria-current="page"
                       href="{{route('paiement')}}"> <svg class="bi me-2" width="16" height="16" fill="currentColor">
                            <path d="M0 12.5v-9A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5M2.5 4a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 1 0V5h2.5a.5.5 0 0 0 0-1zm11 8a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-1 0V11h-2.5a.5.5 0 0 0 0 1z"/>
                            </svg> Paiement</a></h4>
          </li>


          <li class="nav-item"><h4>
    <a class="nav-link {{ !Route::is('devis') && !Route::is('factures') ?: 'bg-primary text-white' }}" style=" color:black ;"
       aria-current="page" data-bs-toggle="collapse" href="#documentAccordion" role="button"
       aria-expanded="false" aria-controls="documentAccordion"><svg class="bi me-2" width="20" height="20" fill="currentColor">
                            <path d="M16,2V16H2V2H16m0-2H2A2,2,0,0,0,0,2V16a2,2,0,0,0,2,2H16a2,2,0,0,0,2-2V2a2,2,0,0,0-2-2Z"/><path d="M14,14H4V12H14Zm0-4H4V8H14Zm0-4H4V4H14Z"/>                    
                                </svg>Document</a></h4>
    <div class="collapse" id="documentAccordion">
        <ul class="nav flex-column"><h5>
            <li class="nav-item" style="margin-left: 10px;">
                <a class="nav-link {{ Route::is('quittances.index') ? 'bg-primary text-white' : '' }}"
                   href="{{route('quittances.index')}}">Quittance</a>
            </li>
            <li class="nav-item" style="margin-left: 10px;">
                <a class="nav-link {{ Route::is('devi.index') ? 'bg-primary text-white' : '' }}"
                   href="{{route('devi.index')}}">Devis</a>
            </li>
            <li class="nav-item">
    <h4>
        <a class="nav-link  {{ Route::is('factures.index') ?: 'bg-primary text-white' }}" 
           style="color:black;" aria-current="page" data-bs-toggle="collapse" href="#bonsAccordion" role="button" 
           aria-expanded="false" aria-controls="bonsAccordion" href="{{route('factures.index')}}">
            Facture
        </a>
    </h4>
    <div class="collapse" id="bonsAccordion">
        <ul class="nav flex-column">
            <h5>
                <li class="nav-item" style="margin-left: 10px;">
                    <a class="nav-link {{ Route::is('factures.index') ? 'bg-primary text-white' : '' }}" href="{{route('factures.index')}}">
                        Facture de vente
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 10px;">
                <a class="nav-link {{ Route::is('done') ? 'bg-primary text-white' : '' }}" 
       href="{{ route('done') }}">Facture d'achat</a>
                </li>
            </h5>
        </ul>
    </div>
</li>

        
            <li class="nav-item">
    <h4>
        <a class="nav-link {{ !Route::is('devis') && !Route::is('factures.index') ?: 'bg-primary text-white' }}" 
           style="color:black;" aria-current="page" data-bs-toggle="collapse" href="#bonsAccordion" role="button" 
           aria-expanded="false" aria-controls="bonsAccordion">
            Bons
        </a>
    </h4>
    <div class="collapse" id="bonsAccordion">
        <ul class="nav flex-column">
            <h5>
                <li class="nav-item" style="margin-left: 10px;">
                    <a class="nav-link {{ Route::is('livraison') ? 'bg-primary text-white' : '' }}" href="{{route('livraison')}}">
                        Bons de livraison
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 10px;">
                    <a class="nav-link {{ Route::is('commande') ? 'bg-primary text-white' : '' }}" 
                       href="{{route('commande')}}">Bons de commande</a>
                </li>
            </h5>
        </ul>
    </div>
</li>
</h5>
        </ul>
    </div>
</li>


          <li class="nav-item"><h4>
                    <a class="nav-link {{ !Route::is('stock') ?: 'bg-primary text-white' }}" style=" color:black ;" aria-current="page"
                       href="{{route('stock')}}"> <svg class="bi me-2" width="16" height="16" fill="currentColor">
                            <path d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555-4.006-2.555Zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555L8.01 9.651Z"/>

                            </svg>Stock</a>
          </li></h4>
          <li class="nav-item"><h4>
    <a class="nav-link {{ !Route::is('add_product') && !Route::is('add_service') ?: 'bg-primary text-white' }}" style=" color:black ;" 
       aria-current="page" data-bs-toggle="collapse" href="#productAccordion" role="button"
       aria-expanded="false" aria-controls="productAccordion"><svg class="bi me-2" width="16" height="16" fill="currentColor">
                            <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0z"/>

                            </svg>Produit</a></h4>
    <div class="collapse" id="productAccordion">
        <ul class="nav flex-column"><h5>
            <li class="nav-item" style="margin-left: 10px;">
                <a class="nav-link {{ Route::is('categories.index') ? 'bg-primary text-white' : '' }}"
                   href="{{route('categories.index')}}">Article</a>
            </li>
            <li class="nav-item" style="margin-left: 10px;">
                <a class="nav-link {{ Route::is('add_service') ? 'bg-primary text-white' : '' }}"
                   href="{{route('add_service')}}">Service</a>
            </li></h5>
        </ul>
    </div>
</li>

                
<li class="nav-item">
    <a class="nav-link {{ !Route::is('tenant_societes.index') ?: 'bg-primary text-white' }}" style="color: black;" href="{{ route('tenant_societes.index') }}">
        <h4>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
            Setting
        </h4>
    </a>
</li> 
                
<!--<li class="nav-item">
    <a class="nav-link {{ !Route::is('categories.index') ?: 'bg-primary text-white' }}" style="color: black;" href="{{ route('categories.index') }}">
        <h4>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
            Categories
        </h4>
    </a>
</li>-->


            </ul>