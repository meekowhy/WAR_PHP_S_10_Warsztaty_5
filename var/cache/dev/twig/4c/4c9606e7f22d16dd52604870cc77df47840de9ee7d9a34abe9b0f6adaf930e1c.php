<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_fb031c3f53f3180a846c3af6d0ddc9bc93284d039028c01b5e95b74a76957808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f87b5b8ed7759dc556bae1cc6946a25ad7b31b34d9f0f9c6ffe42342be405f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f87b5b8ed7759dc556bae1cc6946a25ad7b31b34d9f0f9c6ffe42342be405f3->enter($__internal_8f87b5b8ed7759dc556bae1cc6946a25ad7b31b34d9f0f9c6ffe42342be405f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_7daca3a5378f5cefdd28cdcd9fa50081d617ec92f61e6d1ed9d8ddb6b4c7c97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7daca3a5378f5cefdd28cdcd9fa50081d617ec92f61e6d1ed9d8ddb6b4c7c97f->enter($__internal_7daca3a5378f5cefdd28cdcd9fa50081d617ec92f61e6d1ed9d8ddb6b4c7c97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8f87b5b8ed7759dc556bae1cc6946a25ad7b31b34d9f0f9c6ffe42342be405f3->leave($__internal_8f87b5b8ed7759dc556bae1cc6946a25ad7b31b34d9f0f9c6ffe42342be405f3_prof);

        
        $__internal_7daca3a5378f5cefdd28cdcd9fa50081d617ec92f61e6d1ed9d8ddb6b4c7c97f->leave($__internal_7daca3a5378f5cefdd28cdcd9fa50081d617ec92f61e6d1ed9d8ddb6b4c7c97f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
