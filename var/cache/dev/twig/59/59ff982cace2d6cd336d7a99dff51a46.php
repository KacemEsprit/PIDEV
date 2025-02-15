<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* medecin/rapports.html.twig */
class __TwigTemplate_ec2fac0e4d97916b8e2d568e1800cd7f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/rapports.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/rapports.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medecin/rapports.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Rapports Médicaux";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Flatpickr CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/themes/material_blue.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Flatpickr JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/l10n/fr.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        yield "<style>
  #patient-list {
    max-height: 600px;
    overflow-y: auto;
  }
  .patient-item {
    display: block;
    padding: 15px;
    border: 1px solid #eaeaea;
    border-radius: 8px;
    margin-bottom: 10px;
    transition: background-color 0.3s, border-color 0.3s;
    text-decoration: none;
    color: inherit;
  }
  .patient-item:hover {
    background-color: #f1f3f5;
  }
  .patient-item.active {
    background-color: #e9f7fe;
    border-color: #007bff;
  }
  .patient-avatar {
    width: 50px;
    height: 50px;
    object-fit: cover;
    margin-right: 15px;
    border-radius: 50%;
    border: 2px solid #007bff;
  }

  .report-content {
    display: none;
    margin-top: 20px;
  }
  .report-card {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    padding: 20px;
  }
  .report-header {
    text-align: center;
    margin-bottom: 20px;
  }
  .report-header h2 {
    font-size: 24px;
    color: #007bff;
  }
  .report-header hr {
    margin-top: 10px;
    margin-bottom: 20px;
    border: 1px solid #f1f3f5;
  }
  .report-body p {
    font-size: 16px;
    margin-bottom: 10px;
  }
  .report-body strong {
    color: #333;
  }

  .input-group-text {
    background-color: #007bff;
    color: #ffffff;
  }

  .list-group-item {
    border: 1px solid #eaeaea;
    border-radius: 8px;
    transition: background-color 0.3s, border-color 0.3s;
  }
  .list-group-item:hover {
    background-color: #f1f3f5;
  }

  .modal-content {
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  }

  .modal-header {
    background: linear-gradient(45deg, #007bff, #0056b3);
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    padding: 1.5rem;
  }

  .modal-title {
    font-size: 1.5rem;
    font-weight: 600;
  }

  .modal-body {
    padding: 2rem;
  }

  .modal-footer {
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    padding: 1.5rem;
    background-color: #f8f9fa;
  }

  .form-control {
    border-radius: 8px;
    border: 2px solid #e9ecef;
    padding: 0.75rem;
    transition: all 0.3s ease;
  }

  .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
  }

  .btn {
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
  }

  .btn-primary {
    background: #007bff;
    border: none;
  }

  .btn-primary:hover {
    background: #0056b3;
    transform: translateY(-2px);
  }

  .btn-secondary {
    background: #6c757d;
    border: none;
  }

  .btn-secondary:hover {
    background: #545b62;
    transform: translateY(-2px);
  }
</style>

<div class=\"container-fluid page-header py-5 mb-5\">
  <div class=\"container py-5\">
    <h1 class=\"display-3 text-white mb-3\">Rapports Médicaux des Patients</h1>
    <nav aria-label=\"breadcrumb\">
      <ol class=\"breadcrumb text-uppercase mb-0\">
        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
        <li class=\"breadcrumb-item text-primary active\">Rapport d'État</li>
      </ol>
    </nav>
  </div>
</div>

<div class=\"container py-5\">
  <div class=\"row\">
    <!-- Liste des Patients -->
    <div class=\"col-md-4\">
      <div class=\"input-group mb-3\">
        <span class=\"input-group-text bg-primary text-white\"><i class=\"fas fa-search\"></i></span>
        <input type=\"text\" id=\"patient-search\" class=\"form-control\" placeholder=\"Rechercher un patient\">
      </div>
    <div class=\"list-group\" id=\"patient-list\">
  ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 186, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 187
            yield "    <a href=\"#\" class=\"list-group-item patient-item\" data-patient-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 187), "html", null, true);
            yield "\">
      <div class=\"d-flex align-items-center\">
        <video autoplay loop muted class=\"patient-avatar\" style=\"width: 50px; height: 50px;\">
          <source src=\"https://cdn-icons-mp4.flaticon.com/512/11688/11688509.mp4\" type=\"video/mp4\">
          Votre navigateur ne supporte pas la balise vidéo.
        </video>
        <div>
          <h6 class=\"mb-0\">";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "nom", [], "any", false, false, false, 194), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "prenom", [], "any", false, false, false, 194), "html", null, true);
            yield "</h6>
          <small class=\"text-muted\">";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "adresse", [], "any", false, false, false, 195), "html", null, true);
            yield "</small>
        </div>
      </div>
    </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['patient'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        yield "</div>

    </div>

    <!-- Affichage des Rapports -->
    <div class=\"col-md-8\">
      <div id=\"alert-no-report\" class=\"alert alert-danger text-center\" style=\"display: none;\">
        <p><strong>Aucun rapport trouvé pour ce patient.</strong></p>
      </div>

      <div class=\"mb-3\">
        <select id=\"rapport-select\" class=\"form-select\">
          <option value=\"\">Choisissez un rapport</option>
        </select>
      </div>

      <div id=\"reports-container\"></div>
    </div>
  </div>
</div>

<!-- Modal d'édition -->
<div class=\"modal fade\" id=\"editRapportModal\" tabindex=\"-1\" aria-labelledby=\"editRapportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div id=\"modalContent\">
            <!-- Le contenu sera chargé dynamiquement -->
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var patients = document.querySelectorAll('.patient-item');
    var select = document.getElementById('rapport-select');
    var reportsContainer = document.getElementById('reports-container');
    var alertNoReport = document.getElementById('alert-no-report');

    select.style.display = 'none';
    alertNoReport.style.display = 'none';

    patients.forEach(function(patient) {
      patient.addEventListener('click', function(e) {
          e.preventDefault();
          
          patients.forEach(p => p.classList.remove('active'));
          this.classList.add('active');
  
          var patientId = this.getAttribute('data-patient-id');
  
          // Cacher tous les rapports
          document.querySelectorAll('.report-content').forEach(report => {
              report.style.display = 'none';
          });
  
          // Réinitialiser le select
          select.innerHTML = '<option value=\"\">Choisissez un rapport</option>';
          
          // Vider le conteneur des rapports pour éviter les doublons
          reportsContainer.innerHTML = '';
  
          // Trouver les rapports pour ce patient
          var rapports = document.querySelectorAll('.report-content');
          var found = false;
  
          rapports.forEach(function(rapport) {
              if (rapport.getAttribute('data-patient-id') === patientId) {
                  // Créer l'option dans le select
                  var option = document.createElement('option');
                  option.value = rapport.id;
                  option.textContent = rapport.getAttribute('data-date');
                  select.appendChild(option);
  
                  // Copier le rapport dans le container
                  var rapportClone = rapport.cloneNode(true);
                  reportsContainer.appendChild(rapportClone);
                  found = true;
              }
          });
  
          if (!found) {
              select.style.display = 'none';
              alertNoReport.style.display = 'block';
          } else {
              select.style.display = 'block';
              alertNoReport.style.display = 'none';
          }
      });
  });

    select.addEventListener('change', function() {
        // Cacher tous les rapports dans le container
        reportsContainer.querySelectorAll('.report-content').forEach(report => {
            report.style.display = 'none';
        });

        if (this.value) {
            // Afficher le rapport sélectionné dans le container
            var selectedReport = reportsContainer.querySelector('#' + this.value);
            if (selectedReport) {
                selectedReport.style.display = 'block';
            }
        }
    });

    function showError(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'alert alert-danger mt-3';
        errorDiv.textContent = message;
        const modalBody = document.querySelector('.modal-body');
        if (modalBody) {
            const existingError = modalBody.querySelector('.alert-danger');
            if (existingError) {
                existingError.remove();
            }
            modalBody.insertBefore(errorDiv, modalBody.firstChild);
        }
    }

    function serializeForm(form) {
        const formData = new FormData(form);
        const serialized = {
            rapport_detat: {}
        };
        
        formData.forEach((value, key) => {
            const matches = key.match(/rapport_detat\\[(.*?)\\]/);
            if (matches) {
                const fieldName = matches[1];
                if (!isNaN(value) && value !== '') {
                    serialized.rapport_detat[fieldName] = Number(value);
                } else if (value === 'true') {
                    serialized.rapport_detat[fieldName] = true;
                } else if (value === 'false') {
                    serialized.rapport_detat[fieldName] = false;
                } else {
                    serialized.rapport_detat[fieldName] = value;
                }
            }
        });
        
        return serialized;
    }

    function initFlatpickr(element) {
        if (element && typeof flatpickr !== 'undefined') {
            flatpickr(element, {
                dateFormat: \"Y-m-d\",
                locale: 'fr',
                allowInput: true,
                defaultDate: element.value || 'today'
            });
        }
    }

    window.ouvrirModalEdition = function(rapportId) {
        const url = '";
        // line 355
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medecin_edit_rapport", ["id" => "RAPPORT_ID"]);
        yield "'.replace('RAPPORT_ID', rapportId);
        const modal = new bootstrap.Modal(document.getElementById('editRapportModal'));
        
        fetch(url, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur lors du chargement du formulaire');
            }
            return response.text();
        })
        .then(html => {
            const modalContent = document.getElementById('modalContent');
            modalContent.innerHTML = html;
            
            setTimeout(() => {
                const dateInput = modalContent.querySelector('.datepicker');
                initFlatpickr(dateInput);
            }, 100);

            const form = modalContent.querySelector('#edit-rapport-form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const formData = serializeForm(this);
                    console.log('Données envoyées:', formData);

                    fetch(form.action, {
                        method: 'POST',
                        body: JSON.stringify(formData),
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(data => {
                                throw new Error(data.errors ? data.errors.join('\\n') : 'Erreur lors de la modification');
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            modal.hide();
                            window.location.reload();
                        } else {
                            throw new Error(data.errors ? data.errors.join('\\n') : 'Erreur lors de la modification');
                        }
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        showError(error.message || 'Une erreur est survenue lors de la modification');
                    });
                });
            }

            modal.show();
        })
        .catch(error => {
            console.error('Erreur:', error);
            showError(error.message || 'Une erreur est survenue lors du chargement du formulaire');
        });
    };

    window.confirmerSuppression = function(rapportId) {
        if (confirm('Êtes-vous sûr de vouloir supprimer ce rapport ?')) {
            const url = '";
        // line 428
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medecin_delete_rapport", ["id" => "RAPPORT_ID"]);
        yield "'.replace('RAPPORT_ID', rapportId);
            
            fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    window.location.reload();
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue lors de la suppression du rapport');
            });
        }
    };
});
</script>

";
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rapports"]) || array_key_exists("rapports", $context) ? $context["rapports"] : (function () { throw new RuntimeError('Variable "rapports" does not exist.', 451, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 452
            yield "  <div id=\"report";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "id", [], "any", false, false, false, 452), "html", null, true);
            yield "\" class=\"report-content report-card\" style=\"display: none;\" data-patient-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "patient", [], "any", false, false, false, 452), "id", [], "any", false, false, false, 452), "html", null, true);
            yield "\" data-date=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "dateRapport", [], "any", false, false, false, 452), "d/m/Y"), "html", null, true);
            yield "\">
    <div class=\"report-header\">
      <div class=\"d-flex justify-content-between align-items-center\">
        <h2>Rapport Médical de ";
            // line 455
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "patient", [], "any", false, false, false, 455), "nom", [], "any", false, false, false, 455), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "patient", [], "any", false, false, false, 455), "prenom", [], "any", false, false, false, 455), "html", null, true);
            yield "</h2>
        <div class=\"report-actions\">
          <a href=\"#\" class=\"btn btn-primary\" onclick=\"ouvrirModalEdition(";
            // line 457
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "id", [], "any", false, false, false, 457), "html", null, true);
            yield ")\">
            <i class=\"fas fa-edit\"></i> Modifier
          </a>
          <button type=\"button\" class=\"btn btn-danger ms-2\" onclick=\"confirmerSuppression(";
            // line 460
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "id", [], "any", false, false, false, 460), "html", null, true);
            yield ")\">
            <i class=\"fas fa-trash\"></i> Supprimer
          </button>
        </div>
      </div>
      <hr>
    </div>
    <div class=\"report-body\">
      <p><strong>Âge :</strong> ";
            // line 468
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "age", [], "any", false, false, false, 468), "html", null, true);
            yield "</p>
      <p><strong>Sexe :</strong> ";
            // line 469
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "sexe", [], "any", false, false, false, 469), "html", null, true);
            yield "</p>
      <p><strong>Date du Rapport :</strong> ";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "dateRapport", [], "any", false, false, false, 470), "d/m/Y"), "html", null, true);
            yield "</p>
      <p><strong>Tension Artérielle :</strong> ";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "tensionArterielle", [], "any", false, false, false, 471), "html", null, true);
            yield "</p>
      <p><strong>Pouls :</strong> ";
            // line 472
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "pouls", [], "any", false, false, false, 472), "html", null, true);
            yield "</p>
      <p><strong>Température :</strong> ";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "temperature", [], "any", false, false, false, 473), "html", null, true);
            yield "°C</p>
      <p><strong>Saturation en Oxygène :</strong> ";
            // line 474
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "saturationOxygene", [], "any", false, false, false, 474), "html", null, true);
            yield "%</p>
      <p><strong>IMC :</strong> ";
            // line 475
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "imc", [], "any", false, false, false, 475), "html", null, true);
            yield "</p>
      <p><strong>Niveau de Douleur :</strong> ";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "niveauDouleur", [], "any", false, false, false, 476), "html", null, true);
            yield "</p>
      <p><strong>Traitement :</strong> ";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "traitement", [], "any", false, false, false, 477), "html", null, true);
            yield "</p>
      <p><strong>Complications :</strong> ";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "complications", [], "any", true, true, false, 478)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["rapport"], "complications", [], "any", false, false, false, 478), "Aucune")) : ("Aucune")), "html", null, true);
            yield "</p>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rapport'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 482
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "medecin/rapports.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  713 => 482,  703 => 478,  699 => 477,  695 => 476,  691 => 475,  687 => 474,  683 => 473,  679 => 472,  675 => 471,  671 => 470,  667 => 469,  663 => 468,  652 => 460,  646 => 457,  639 => 455,  628 => 452,  624 => 451,  598 => 428,  522 => 355,  365 => 200,  354 => 195,  348 => 194,  337 => 187,  333 => 186,  314 => 170,  162 => 20,  149 => 19,  132 => 13,  119 => 12,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rapports Médicaux{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Flatpickr CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/themes/material_blue.css\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Flatpickr JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/l10n/fr.js\"></script>
{% endblock %}

{% block body %}
<style>
  #patient-list {
    max-height: 600px;
    overflow-y: auto;
  }
  .patient-item {
    display: block;
    padding: 15px;
    border: 1px solid #eaeaea;
    border-radius: 8px;
    margin-bottom: 10px;
    transition: background-color 0.3s, border-color 0.3s;
    text-decoration: none;
    color: inherit;
  }
  .patient-item:hover {
    background-color: #f1f3f5;
  }
  .patient-item.active {
    background-color: #e9f7fe;
    border-color: #007bff;
  }
  .patient-avatar {
    width: 50px;
    height: 50px;
    object-fit: cover;
    margin-right: 15px;
    border-radius: 50%;
    border: 2px solid #007bff;
  }

  .report-content {
    display: none;
    margin-top: 20px;
  }
  .report-card {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    padding: 20px;
  }
  .report-header {
    text-align: center;
    margin-bottom: 20px;
  }
  .report-header h2 {
    font-size: 24px;
    color: #007bff;
  }
  .report-header hr {
    margin-top: 10px;
    margin-bottom: 20px;
    border: 1px solid #f1f3f5;
  }
  .report-body p {
    font-size: 16px;
    margin-bottom: 10px;
  }
  .report-body strong {
    color: #333;
  }

  .input-group-text {
    background-color: #007bff;
    color: #ffffff;
  }

  .list-group-item {
    border: 1px solid #eaeaea;
    border-radius: 8px;
    transition: background-color 0.3s, border-color 0.3s;
  }
  .list-group-item:hover {
    background-color: #f1f3f5;
  }

  .modal-content {
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  }

  .modal-header {
    background: linear-gradient(45deg, #007bff, #0056b3);
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    padding: 1.5rem;
  }

  .modal-title {
    font-size: 1.5rem;
    font-weight: 600;
  }

  .modal-body {
    padding: 2rem;
  }

  .modal-footer {
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    padding: 1.5rem;
    background-color: #f8f9fa;
  }

  .form-control {
    border-radius: 8px;
    border: 2px solid #e9ecef;
    padding: 0.75rem;
    transition: all 0.3s ease;
  }

  .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
  }

  .btn {
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
  }

  .btn-primary {
    background: #007bff;
    border: none;
  }

  .btn-primary:hover {
    background: #0056b3;
    transform: translateY(-2px);
  }

  .btn-secondary {
    background: #6c757d;
    border: none;
  }

  .btn-secondary:hover {
    background: #545b62;
    transform: translateY(-2px);
  }
</style>

<div class=\"container-fluid page-header py-5 mb-5\">
  <div class=\"container py-5\">
    <h1 class=\"display-3 text-white mb-3\">Rapports Médicaux des Patients</h1>
    <nav aria-label=\"breadcrumb\">
      <ol class=\"breadcrumb text-uppercase mb-0\">
        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_home') }}\">Accueil</a></li>
        <li class=\"breadcrumb-item text-primary active\">Rapport d'État</li>
      </ol>
    </nav>
  </div>
</div>

<div class=\"container py-5\">
  <div class=\"row\">
    <!-- Liste des Patients -->
    <div class=\"col-md-4\">
      <div class=\"input-group mb-3\">
        <span class=\"input-group-text bg-primary text-white\"><i class=\"fas fa-search\"></i></span>
        <input type=\"text\" id=\"patient-search\" class=\"form-control\" placeholder=\"Rechercher un patient\">
      </div>
    <div class=\"list-group\" id=\"patient-list\">
  {% for patient in patients %}
    <a href=\"#\" class=\"list-group-item patient-item\" data-patient-id=\"{{ patient.id }}\">
      <div class=\"d-flex align-items-center\">
        <video autoplay loop muted class=\"patient-avatar\" style=\"width: 50px; height: 50px;\">
          <source src=\"https://cdn-icons-mp4.flaticon.com/512/11688/11688509.mp4\" type=\"video/mp4\">
          Votre navigateur ne supporte pas la balise vidéo.
        </video>
        <div>
          <h6 class=\"mb-0\">{{ patient.nom }} {{ patient.prenom }}</h6>
          <small class=\"text-muted\">{{ patient.adresse }}</small>
        </div>
      </div>
    </a>
  {% endfor %}
</div>

    </div>

    <!-- Affichage des Rapports -->
    <div class=\"col-md-8\">
      <div id=\"alert-no-report\" class=\"alert alert-danger text-center\" style=\"display: none;\">
        <p><strong>Aucun rapport trouvé pour ce patient.</strong></p>
      </div>

      <div class=\"mb-3\">
        <select id=\"rapport-select\" class=\"form-select\">
          <option value=\"\">Choisissez un rapport</option>
        </select>
      </div>

      <div id=\"reports-container\"></div>
    </div>
  </div>
</div>

<!-- Modal d'édition -->
<div class=\"modal fade\" id=\"editRapportModal\" tabindex=\"-1\" aria-labelledby=\"editRapportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div id=\"modalContent\">
            <!-- Le contenu sera chargé dynamiquement -->
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var patients = document.querySelectorAll('.patient-item');
    var select = document.getElementById('rapport-select');
    var reportsContainer = document.getElementById('reports-container');
    var alertNoReport = document.getElementById('alert-no-report');

    select.style.display = 'none';
    alertNoReport.style.display = 'none';

    patients.forEach(function(patient) {
      patient.addEventListener('click', function(e) {
          e.preventDefault();
          
          patients.forEach(p => p.classList.remove('active'));
          this.classList.add('active');
  
          var patientId = this.getAttribute('data-patient-id');
  
          // Cacher tous les rapports
          document.querySelectorAll('.report-content').forEach(report => {
              report.style.display = 'none';
          });
  
          // Réinitialiser le select
          select.innerHTML = '<option value=\"\">Choisissez un rapport</option>';
          
          // Vider le conteneur des rapports pour éviter les doublons
          reportsContainer.innerHTML = '';
  
          // Trouver les rapports pour ce patient
          var rapports = document.querySelectorAll('.report-content');
          var found = false;
  
          rapports.forEach(function(rapport) {
              if (rapport.getAttribute('data-patient-id') === patientId) {
                  // Créer l'option dans le select
                  var option = document.createElement('option');
                  option.value = rapport.id;
                  option.textContent = rapport.getAttribute('data-date');
                  select.appendChild(option);
  
                  // Copier le rapport dans le container
                  var rapportClone = rapport.cloneNode(true);
                  reportsContainer.appendChild(rapportClone);
                  found = true;
              }
          });
  
          if (!found) {
              select.style.display = 'none';
              alertNoReport.style.display = 'block';
          } else {
              select.style.display = 'block';
              alertNoReport.style.display = 'none';
          }
      });
  });

    select.addEventListener('change', function() {
        // Cacher tous les rapports dans le container
        reportsContainer.querySelectorAll('.report-content').forEach(report => {
            report.style.display = 'none';
        });

        if (this.value) {
            // Afficher le rapport sélectionné dans le container
            var selectedReport = reportsContainer.querySelector('#' + this.value);
            if (selectedReport) {
                selectedReport.style.display = 'block';
            }
        }
    });

    function showError(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'alert alert-danger mt-3';
        errorDiv.textContent = message;
        const modalBody = document.querySelector('.modal-body');
        if (modalBody) {
            const existingError = modalBody.querySelector('.alert-danger');
            if (existingError) {
                existingError.remove();
            }
            modalBody.insertBefore(errorDiv, modalBody.firstChild);
        }
    }

    function serializeForm(form) {
        const formData = new FormData(form);
        const serialized = {
            rapport_detat: {}
        };
        
        formData.forEach((value, key) => {
            const matches = key.match(/rapport_detat\\[(.*?)\\]/);
            if (matches) {
                const fieldName = matches[1];
                if (!isNaN(value) && value !== '') {
                    serialized.rapport_detat[fieldName] = Number(value);
                } else if (value === 'true') {
                    serialized.rapport_detat[fieldName] = true;
                } else if (value === 'false') {
                    serialized.rapport_detat[fieldName] = false;
                } else {
                    serialized.rapport_detat[fieldName] = value;
                }
            }
        });
        
        return serialized;
    }

    function initFlatpickr(element) {
        if (element && typeof flatpickr !== 'undefined') {
            flatpickr(element, {
                dateFormat: \"Y-m-d\",
                locale: 'fr',
                allowInput: true,
                defaultDate: element.value || 'today'
            });
        }
    }

    window.ouvrirModalEdition = function(rapportId) {
        const url = '{{ path(\"app_medecin_edit_rapport\", {\"id\": \"RAPPORT_ID\"}) }}'.replace('RAPPORT_ID', rapportId);
        const modal = new bootstrap.Modal(document.getElementById('editRapportModal'));
        
        fetch(url, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur lors du chargement du formulaire');
            }
            return response.text();
        })
        .then(html => {
            const modalContent = document.getElementById('modalContent');
            modalContent.innerHTML = html;
            
            setTimeout(() => {
                const dateInput = modalContent.querySelector('.datepicker');
                initFlatpickr(dateInput);
            }, 100);

            const form = modalContent.querySelector('#edit-rapport-form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const formData = serializeForm(this);
                    console.log('Données envoyées:', formData);

                    fetch(form.action, {
                        method: 'POST',
                        body: JSON.stringify(formData),
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(data => {
                                throw new Error(data.errors ? data.errors.join('\\n') : 'Erreur lors de la modification');
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            modal.hide();
                            window.location.reload();
                        } else {
                            throw new Error(data.errors ? data.errors.join('\\n') : 'Erreur lors de la modification');
                        }
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        showError(error.message || 'Une erreur est survenue lors de la modification');
                    });
                });
            }

            modal.show();
        })
        .catch(error => {
            console.error('Erreur:', error);
            showError(error.message || 'Une erreur est survenue lors du chargement du formulaire');
        });
    };

    window.confirmerSuppression = function(rapportId) {
        if (confirm('Êtes-vous sûr de vouloir supprimer ce rapport ?')) {
            const url = '{{ path(\"app_medecin_delete_rapport\", {\"id\": \"RAPPORT_ID\"}) }}'.replace('RAPPORT_ID', rapportId);
            
            fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    window.location.reload();
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue lors de la suppression du rapport');
            });
        }
    };
});
</script>

{% for rapport in rapports %}
  <div id=\"report{{ rapport.id }}\" class=\"report-content report-card\" style=\"display: none;\" data-patient-id=\"{{ rapport.patient.id }}\" data-date=\"{{ rapport.dateRapport|date('d/m/Y') }}\">
    <div class=\"report-header\">
      <div class=\"d-flex justify-content-between align-items-center\">
        <h2>Rapport Médical de {{ rapport.patient.nom }} {{ rapport.patient.prenom }}</h2>
        <div class=\"report-actions\">
          <a href=\"#\" class=\"btn btn-primary\" onclick=\"ouvrirModalEdition({{ rapport.id }})\">
            <i class=\"fas fa-edit\"></i> Modifier
          </a>
          <button type=\"button\" class=\"btn btn-danger ms-2\" onclick=\"confirmerSuppression({{ rapport.id }})\">
            <i class=\"fas fa-trash\"></i> Supprimer
          </button>
        </div>
      </div>
      <hr>
    </div>
    <div class=\"report-body\">
      <p><strong>Âge :</strong> {{ rapport.age }}</p>
      <p><strong>Sexe :</strong> {{ rapport.sexe }}</p>
      <p><strong>Date du Rapport :</strong> {{ rapport.dateRapport|date('d/m/Y') }}</p>
      <p><strong>Tension Artérielle :</strong> {{ rapport.tensionArterielle }}</p>
      <p><strong>Pouls :</strong> {{ rapport.pouls }}</p>
      <p><strong>Température :</strong> {{ rapport.temperature }}°C</p>
      <p><strong>Saturation en Oxygène :</strong> {{ rapport.saturationOxygene }}%</p>
      <p><strong>IMC :</strong> {{ rapport.imc }}</p>
      <p><strong>Niveau de Douleur :</strong> {{ rapport.niveauDouleur }}</p>
      <p><strong>Traitement :</strong> {{ rapport.traitement }}</p>
      <p><strong>Complications :</strong> {{ rapport.complications|default('Aucune') }}</p>
    </div>
  </div>
{% endfor %}

{% endblock %}", "medecin/rapports.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\medecin\\rapports.html.twig");
    }
}
