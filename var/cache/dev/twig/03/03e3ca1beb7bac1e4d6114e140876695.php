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

/* components/toast.html.twig */
class __TwigTemplate_870d40e8baca6c5c59f5aebba9eba183 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/toast.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/toast.html.twig"));

        // line 1
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", [], "any", false, false, false, 1)) > 0)) {
            // line 2
            yield "<div class=\"toast-container\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 4
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 5
                    yield "            <div class=\"custom-toast ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                    yield "\" role=\"alert\">
                <div class=\"toast-icon\">
                    ";
                    // line 7
                    if (($context["label"] == "success")) {
                        // line 8
                        yield "                        <i class=\"fas fa-check-circle\"></i>
                    ";
                    } elseif ((                    // line 9
$context["label"] == "error")) {
                        // line 10
                        yield "                        <i class=\"fas fa-exclamation-circle\"></i>
                    ";
                    }
                    // line 12
                    yield "                </div>
                <div class=\"toast-content\">
                    <div class=\"toast-title\">
                        ";
                    // line 15
                    if (($context["label"] == "success")) {
                        // line 16
                        yield "                            Succès !
                        ";
                    } elseif ((                    // line 17
$context["label"] == "error")) {
                        // line 18
                        yield "                            Erreur
                        ";
                    }
                    // line 20
                    yield "                    </div>
                    <div class=\"toast-message\">";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "</div>
                </div>
                <button type=\"button\" class=\"toast-close\" aria-label=\"Fermer\">
                    <i class=\"fas fa-times\"></i>
                </button>
                <div class=\"toast-progress\"></div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "</div>

<style>
.toast-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    gap: 10px;
    pointer-events: none;
}

.custom-toast {
    display: flex;
    align-items: flex-start;
    background: white;
    border-radius: 12px;
    padding: 16px;
    min-width: 300px;
    max-width: 400px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
    margin-bottom: 10px;
    position: relative;
    pointer-events: auto;
    opacity: 0;
    transform: translateX(100%);
    transition: all 0.3s ease-in-out;
    overflow: hidden;
}

.custom-toast.show {
    opacity: 1;
    transform: translateX(0);
}

.custom-toast.dismissing {
    opacity: 0;
    transform: translateX(100%);
}

.custom-toast.success {
    border-left: 4px solid #10B981;
    background: linear-gradient(to right, rgba(16, 185, 129, 0.05), white);
}

.custom-toast.error {
    border-left: 4px solid #EF4444;
    background: linear-gradient(to right, rgba(239, 68, 68, 0.05), white);
}

.toast-icon {
    flex-shrink: 0;
    width: 24px;
    height: 24px;
    margin-right: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.toast-icon i {
    font-size: 24px;
}

.custom-toast.success .toast-icon i {
    color: #10B981;
}

.custom-toast.error .toast-icon i {
    color: #EF4444;
}

.toast-content {
    flex-grow: 1;
    margin-right: 12px;
}

.toast-title {
    font-weight: 600;
    font-size: 16px;
    margin-bottom: 4px;
    color: #1F2937;
}

.toast-message {
    font-size: 14px;
    color: #6B7280;
    line-height: 1.5;
}

.toast-close {
    background: transparent;
    border: none;
    color: #9CA3AF;
    cursor: pointer;
    padding: 4px;
    font-size: 16px;
    transition: all 0.2s;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.toast-close:hover {
    color: #4B5563;
    background-color: rgba(0, 0, 0, 0.05);
}

.toast-progress {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: #E5E7EB;
}

.custom-toast.success .toast-progress::before {
    background: #10B981;
}

.custom-toast.error .toast-progress::before {
    background: #EF4444;
}

.toast-progress::before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: #10B981;
    animation: progress 5s linear forwards;
}

@keyframes progress {
    from { width: 100%; }
    to { width: 0%; }
}

@media (max-width: 768px) {
    .toast-container {
        left: 20px;
        right: 20px;
    }
    
    .custom-toast {
        min-width: 0;
        width: 100%;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toasts = document.querySelectorAll('.custom-toast');
    
    toasts.forEach(toast => {
        // Supprimer automatiquement après 5 secondes
        setTimeout(() => {
            if (toast && toast.parentElement) {
                toast.classList.add('dismiss');
                setTimeout(() => {
                    if (toast && toast.parentElement) {
                        toast.remove();
                    }
                }, 500);
            }
        }, 5000);

        // Ajouter l'événement swipe pour fermer
        let touchstartX = 0;
        let touchendX = 0;
        
        toast.addEventListener('touchstart', e => {
            touchstartX = e.changedTouches[0].screenX;
        });

        toast.addEventListener('touchend', e => {
            touchendX = e.changedTouches[0].screenX;
            if (touchendX > touchstartX + 50) { // Swipe droite
                toast.classList.add('dismiss');
                setTimeout(() => toast.remove(), 300);
            }
        });
    });
});
</script>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/toast.html.twig";
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
        return array (  118 => 30,  112 => 29,  98 => 21,  95 => 20,  91 => 18,  89 => 17,  86 => 16,  84 => 15,  79 => 12,  75 => 10,  73 => 9,  70 => 8,  68 => 7,  62 => 5,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if app.flashes|length > 0 %}
<div class=\"toast-container\">
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"custom-toast {{ label }}\" role=\"alert\">
                <div class=\"toast-icon\">
                    {% if label == 'success' %}
                        <i class=\"fas fa-check-circle\"></i>
                    {% elseif label == 'error' %}
                        <i class=\"fas fa-exclamation-circle\"></i>
                    {% endif %}
                </div>
                <div class=\"toast-content\">
                    <div class=\"toast-title\">
                        {% if label == 'success' %}
                            Succès !
                        {% elseif label == 'error' %}
                            Erreur
                        {% endif %}
                    </div>
                    <div class=\"toast-message\">{{ message }}</div>
                </div>
                <button type=\"button\" class=\"toast-close\" aria-label=\"Fermer\">
                    <i class=\"fas fa-times\"></i>
                </button>
                <div class=\"toast-progress\"></div>
            </div>
        {% endfor %}
    {% endfor %}
</div>

<style>
.toast-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    gap: 10px;
    pointer-events: none;
}

.custom-toast {
    display: flex;
    align-items: flex-start;
    background: white;
    border-radius: 12px;
    padding: 16px;
    min-width: 300px;
    max-width: 400px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
    margin-bottom: 10px;
    position: relative;
    pointer-events: auto;
    opacity: 0;
    transform: translateX(100%);
    transition: all 0.3s ease-in-out;
    overflow: hidden;
}

.custom-toast.show {
    opacity: 1;
    transform: translateX(0);
}

.custom-toast.dismissing {
    opacity: 0;
    transform: translateX(100%);
}

.custom-toast.success {
    border-left: 4px solid #10B981;
    background: linear-gradient(to right, rgba(16, 185, 129, 0.05), white);
}

.custom-toast.error {
    border-left: 4px solid #EF4444;
    background: linear-gradient(to right, rgba(239, 68, 68, 0.05), white);
}

.toast-icon {
    flex-shrink: 0;
    width: 24px;
    height: 24px;
    margin-right: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.toast-icon i {
    font-size: 24px;
}

.custom-toast.success .toast-icon i {
    color: #10B981;
}

.custom-toast.error .toast-icon i {
    color: #EF4444;
}

.toast-content {
    flex-grow: 1;
    margin-right: 12px;
}

.toast-title {
    font-weight: 600;
    font-size: 16px;
    margin-bottom: 4px;
    color: #1F2937;
}

.toast-message {
    font-size: 14px;
    color: #6B7280;
    line-height: 1.5;
}

.toast-close {
    background: transparent;
    border: none;
    color: #9CA3AF;
    cursor: pointer;
    padding: 4px;
    font-size: 16px;
    transition: all 0.2s;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.toast-close:hover {
    color: #4B5563;
    background-color: rgba(0, 0, 0, 0.05);
}

.toast-progress {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: #E5E7EB;
}

.custom-toast.success .toast-progress::before {
    background: #10B981;
}

.custom-toast.error .toast-progress::before {
    background: #EF4444;
}

.toast-progress::before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: #10B981;
    animation: progress 5s linear forwards;
}

@keyframes progress {
    from { width: 100%; }
    to { width: 0%; }
}

@media (max-width: 768px) {
    .toast-container {
        left: 20px;
        right: 20px;
    }
    
    .custom-toast {
        min-width: 0;
        width: 100%;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toasts = document.querySelectorAll('.custom-toast');
    
    toasts.forEach(toast => {
        // Supprimer automatiquement après 5 secondes
        setTimeout(() => {
            if (toast && toast.parentElement) {
                toast.classList.add('dismiss');
                setTimeout(() => {
                    if (toast && toast.parentElement) {
                        toast.remove();
                    }
                }, 500);
            }
        }, 5000);

        // Ajouter l'événement swipe pour fermer
        let touchstartX = 0;
        let touchendX = 0;
        
        toast.addEventListener('touchstart', e => {
            touchstartX = e.changedTouches[0].screenX;
        });

        toast.addEventListener('touchend', e => {
            touchendX = e.changedTouches[0].screenX;
            if (touchendX > touchstartX + 50) { // Swipe droite
                toast.classList.add('dismiss');
                setTimeout(() => toast.remove(), 300);
            }
        });
    });
});
</script>
{% endif %}
", "components/toast.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\components\\toast.html.twig");
    }
}
