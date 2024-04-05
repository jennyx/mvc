<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* report.html.twig */
class __TwigTemplate_b81c5f9a637df59450e6d9dd3fb40a8c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Report";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Report</h1>

    <section>
        <h2><a href=\"#kmom01\">Kmom01</a></h2>
        <p><b>Berätta kort om dina förkunskaper och tidigare erfarenheter kring objektorientering.</b><br>
        Jag har fått erfarenheter kring objektorientering från oopython kursen samt objektorienterad Java 
        som jag läste för många år sen. Jag är bekant med att skapa klasser, moduler och strukturera och 
        dela upp kod i flera olika filer. Känner till arv och jobbat med det förr. Jag har minne av 
        interface och tror därför jag jobbat med det förr.
        </p>
        
        <p><b>Berätta kort om PHPs modell för klasser och objekt. Vilka är de grunder man behöver veta/förstå 
        för att kunna komma igång och skapa sina första klasser?</b><br>
        En klass är som en mall för ett objekt. Den omsluter properties/variabler och metoder som kan vara 
        public, protected eller private. Klasser definieras med “class” och namnges med en stor bokstav i 
        början. Properties håller värden och metoder håller klassens funktioner. Man instansierar ett objekt
        av en klass genom att använda sig av new och klassens namn, tex \$object = new Class();
        </p>
        
        <p><b>Reflektera kort över den kodbas, koden, strukturen som användes till uppgiften me/report, hur 
        uppfattar du den?</b><br>
        Kodbasen innehåller väldigt mycket och många filer. Många av filerna vet jag inte vad de gör eller 
        innehåller. Det är mycket att hålla reda på, men när koden är uppdelad och strukturerad på det viset 
        ser det snyggare ut. Det är ordning och reda och lättare veta var man ska ändra i koden för ett 
        specifikt syfte, så som twig.
        </p>
        
        <p><b>Med tanke på artikeln “PHP The Right Way”, vilka delar in den finner du extra intressanta och 
        värdefulla? Är det några särskilda områden som du känner att du vill veta mer om? Lyft fram några delar 
        av artikeln som du känner mer värdefulla.</b><br>
        Jag kollade bara väldigt snabbt igenom de första rubrikerna i artikeln. Jag tror att den kan vara till 
        god hjälp. Än så länge är det inget speciellt område som fångat mitt intresse så jag inte säga vad jag 
        vill veta mer om. Highlights och coding practices var för mig värdefulla för Getting started med set up 
        är inte lika intressant för mig.
        </p>
        
        <p><b>Vilken är din TIL för detta kmom?</b><br>
        TIL för kmom01 är PHP namespaces som var helt nytt för mig.
        </p>
    </section>

    <section>
        <h2><a href=\"#kmom02\">Kmom02</a></h2>
    </section>

    <section>
        <h2><a href=\"#kmom03\">Kmom03</a></h2>
    </section>

    <section>
        <h2><a href=\"#kmom04\">Kmom04</a></h2>
    </section>

    <section>
        <h2><a href=\"#kmom05\">Kmom05</a></h2>
    </section>

    <section>
        <h2><a href=\"#kmom06\">Kmom06</a></h2>
    </section>

    <section>
        <h2><a href=\"#kmom10\">Kmom10</a></h2>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report{% endblock %}

{% block body %}
<h1>Report</h1>

    <section>
        <h2><a href=\"#kmom01\">Kmom01</a></h2>
        <p><b>Berätta kort om dina förkunskaper och tidigare erfarenheter kring objektorientering.</b><br>
        Jag har fått erfarenheter kring objektorientering från oopython kursen samt objektorienterad Java 
        som jag läste för många år sen. Jag är bekant med att skapa klasser, moduler och strukturera och 
        dela upp kod i flera olika filer. Känner till arv och jobbat med det förr. Jag har minne av 
        interface och tror därför jag jobbat med det förr.
        </p>
        
        <p><b>Berätta kort om PHPs modell för klasser och objekt. Vilka är de grunder man behöver veta/förstå 
        för att kunna komma igång och skapa sina första klasser?</b><br>
        En klass är som en mall för ett objekt. Den omsluter properties/variabler och metoder som kan vara 
        public, protected eller private. Klasser definieras med “class” och namnges med en stor bokstav i 
        början. Properties håller värden och metoder håller klassens funktioner. Man instansierar ett objekt
        av en klass genom att använda sig av new och klassens namn, tex \$object = new Class();
        </p>
        
        <p><b>Reflektera kort över den kodbas, koden, strukturen som användes till uppgiften me/report, hur 
        uppfattar du den?</b><br>
        Kodbasen innehåller väldigt mycket och många filer. Många av filerna vet jag inte vad de gör eller 
        innehåller. Det är mycket att hålla reda på, men när koden är uppdelad och strukturerad på det viset 
        ser det snyggare ut. Det är ordning och reda och lättare veta var man ska ändra i koden för ett 
        specifikt syfte, så som twig.
        </p>
        
        <p><b>Med tanke på artikeln “PHP The Right Way”, vilka delar in den finner du extra intressanta och 
        värdefulla? Är det några särskilda områden som du känner att du vill veta mer om? Lyft fram några delar 
        av artikeln som du känner mer värdefulla.</b><br>
        Jag kollade bara väldigt snabbt igenom de första rubrikerna i artikeln. Jag tror att den kan vara till 
        god hjälp. Än så länge är det inget speciellt område som fångat mitt intresse så jag inte säga vad jag 
        vill veta mer om. Highlights och coding practices var för mig värdefulla för Getting started med set up 
        är inte lika intressant för mig.
        </p>
        
        <p><b>Vilken är din TIL för detta kmom?</b><br>
        TIL för kmom01 är PHP namespaces som var helt nytt för mig.
        </p>
    </section>

    <section>
        <h2><a href=\"#kmom02\">Kmom02</a></h2>
    </section>

    <section>
        <h2><a href=\"#kmom03\">Kmom03</a></h2>
    </section>

    <section>
        <h2><a href=\"#kmom04\">Kmom04</a></h2>
    </section>

    <section>
        <h2><a href=\"#kmom05\">Kmom05</a></h2>
    </section>

    <section>
        <h2><a href=\"#kmom06\">Kmom06</a></h2>
    </section>

    <section>
        <h2><a href=\"#kmom10\">Kmom10</a></h2>
    </section>

{% endblock %}
", "report.html.twig", "/home/jenny/dbwebb-kurser/mvc/me/report/app/templates/report.html.twig");
    }
}
