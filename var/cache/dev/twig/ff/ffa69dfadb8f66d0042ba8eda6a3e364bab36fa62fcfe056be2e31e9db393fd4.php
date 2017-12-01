<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1a47be4f8c2ee27c731413515b2284508fdb418df01233fd56ba5bcb0939d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a47be4f8c2ee27c731413515b2284508fdb418df01233fd56ba5bcb0939d2e->enter($__internal_c1a47be4f8c2ee27c731413515b2284508fdb418df01233fd56ba5bcb0939d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9283e196899bdb3cfbf546cefe08ba0e0a23bc92618bff76eedf02466ff289f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9283e196899bdb3cfbf546cefe08ba0e0a23bc92618bff76eedf02466ff289f7->enter($__internal_9283e196899bdb3cfbf546cefe08ba0e0a23bc92618bff76eedf02466ff289f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c1a47be4f8c2ee27c731413515b2284508fdb418df01233fd56ba5bcb0939d2e->leave($__internal_c1a47be4f8c2ee27c731413515b2284508fdb418df01233fd56ba5bcb0939d2e_prof);

        
        $__internal_9283e196899bdb3cfbf546cefe08ba0e0a23bc92618bff76eedf02466ff289f7->leave($__internal_9283e196899bdb3cfbf546cefe08ba0e0a23bc92618bff76eedf02466ff289f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dde739d98dc545fae83b2152736abe0ec3ad638d38a71d87d0dd849764137cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dde739d98dc545fae83b2152736abe0ec3ad638d38a71d87d0dd849764137cf->enter($__internal_3dde739d98dc545fae83b2152736abe0ec3ad638d38a71d87d0dd849764137cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9ee6c9e4444b880f205b3076916a886263b2bd26efd86278ccbac1ac18dfb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ee6c9e4444b880f205b3076916a886263b2bd26efd86278ccbac1ac18dfb94->enter($__internal_f9ee6c9e4444b880f205b3076916a886263b2bd26efd86278ccbac1ac18dfb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f9ee6c9e4444b880f205b3076916a886263b2bd26efd86278ccbac1ac18dfb94->leave($__internal_f9ee6c9e4444b880f205b3076916a886263b2bd26efd86278ccbac1ac18dfb94_prof);

        
        $__internal_3dde739d98dc545fae83b2152736abe0ec3ad638d38a71d87d0dd849764137cf->leave($__internal_3dde739d98dc545fae83b2152736abe0ec3ad638d38a71d87d0dd849764137cf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d61bacdd3034dcdde0fb30dffb26196016a8834d67acb7b2d7e203650e310854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61bacdd3034dcdde0fb30dffb26196016a8834d67acb7b2d7e203650e310854->enter($__internal_d61bacdd3034dcdde0fb30dffb26196016a8834d67acb7b2d7e203650e310854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_36ed65814ed1e6223228567acf0e8a9ded045a17958b6e72d53d5138ddb9c438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ed65814ed1e6223228567acf0e8a9ded045a17958b6e72d53d5138ddb9c438->enter($__internal_36ed65814ed1e6223228567acf0e8a9ded045a17958b6e72d53d5138ddb9c438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_36ed65814ed1e6223228567acf0e8a9ded045a17958b6e72d53d5138ddb9c438->leave($__internal_36ed65814ed1e6223228567acf0e8a9ded045a17958b6e72d53d5138ddb9c438_prof);

        
        $__internal_d61bacdd3034dcdde0fb30dffb26196016a8834d67acb7b2d7e203650e310854->leave($__internal_d61bacdd3034dcdde0fb30dffb26196016a8834d67acb7b2d7e203650e310854_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_920f949a4814b2ae1a5a0c619a117114d982adf78fa66f55b996b359c277c4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920f949a4814b2ae1a5a0c619a117114d982adf78fa66f55b996b359c277c4f0->enter($__internal_920f949a4814b2ae1a5a0c619a117114d982adf78fa66f55b996b359c277c4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_669b4477f5926652df74b47150bdd601158f52fd54755118527cf61c68163ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669b4477f5926652df74b47150bdd601158f52fd54755118527cf61c68163ade->enter($__internal_669b4477f5926652df74b47150bdd601158f52fd54755118527cf61c68163ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_669b4477f5926652df74b47150bdd601158f52fd54755118527cf61c68163ade->leave($__internal_669b4477f5926652df74b47150bdd601158f52fd54755118527cf61c68163ade_prof);

        
        $__internal_920f949a4814b2ae1a5a0c619a117114d982adf78fa66f55b996b359c277c4f0->leave($__internal_920f949a4814b2ae1a5a0c619a117114d982adf78fa66f55b996b359c277c4f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
