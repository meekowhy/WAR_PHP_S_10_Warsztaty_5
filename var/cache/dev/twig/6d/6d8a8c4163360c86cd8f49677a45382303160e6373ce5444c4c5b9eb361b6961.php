<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49c7f5392a095e5d6d9df5afad30f5711c009a985ae50f168f1830c3295d896b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c7f5392a095e5d6d9df5afad30f5711c009a985ae50f168f1830c3295d896b->enter($__internal_49c7f5392a095e5d6d9df5afad30f5711c009a985ae50f168f1830c3295d896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8f3a21a5ce5e3a9156200567b024883e7b1c49a35cdcce3ce9615e94c357385d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3a21a5ce5e3a9156200567b024883e7b1c49a35cdcce3ce9615e94c357385d->enter($__internal_8f3a21a5ce5e3a9156200567b024883e7b1c49a35cdcce3ce9615e94c357385d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_49c7f5392a095e5d6d9df5afad30f5711c009a985ae50f168f1830c3295d896b->leave($__internal_49c7f5392a095e5d6d9df5afad30f5711c009a985ae50f168f1830c3295d896b_prof);

        
        $__internal_8f3a21a5ce5e3a9156200567b024883e7b1c49a35cdcce3ce9615e94c357385d->leave($__internal_8f3a21a5ce5e3a9156200567b024883e7b1c49a35cdcce3ce9615e94c357385d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d48f523a27d8e30fec7ce0c49a9d09c671ebf5de6c1a1c58218de246649330ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48f523a27d8e30fec7ce0c49a9d09c671ebf5de6c1a1c58218de246649330ca->enter($__internal_d48f523a27d8e30fec7ce0c49a9d09c671ebf5de6c1a1c58218de246649330ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1063ed9945d9cdc242ef090917cdae74b1dc57f5e38b404ac7cd8d6d5af9294d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1063ed9945d9cdc242ef090917cdae74b1dc57f5e38b404ac7cd8d6d5af9294d->enter($__internal_1063ed9945d9cdc242ef090917cdae74b1dc57f5e38b404ac7cd8d6d5af9294d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1063ed9945d9cdc242ef090917cdae74b1dc57f5e38b404ac7cd8d6d5af9294d->leave($__internal_1063ed9945d9cdc242ef090917cdae74b1dc57f5e38b404ac7cd8d6d5af9294d_prof);

        
        $__internal_d48f523a27d8e30fec7ce0c49a9d09c671ebf5de6c1a1c58218de246649330ca->leave($__internal_d48f523a27d8e30fec7ce0c49a9d09c671ebf5de6c1a1c58218de246649330ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_531989bca78ef52b1d7edbeed78c50016c0d11291129913bb972ebb7b0b33862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531989bca78ef52b1d7edbeed78c50016c0d11291129913bb972ebb7b0b33862->enter($__internal_531989bca78ef52b1d7edbeed78c50016c0d11291129913bb972ebb7b0b33862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b8b3c2f89607097e19e9ff5af1f94b439e39d3e579c15852827aef74b1235911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b3c2f89607097e19e9ff5af1f94b439e39d3e579c15852827aef74b1235911->enter($__internal_b8b3c2f89607097e19e9ff5af1f94b439e39d3e579c15852827aef74b1235911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b8b3c2f89607097e19e9ff5af1f94b439e39d3e579c15852827aef74b1235911->leave($__internal_b8b3c2f89607097e19e9ff5af1f94b439e39d3e579c15852827aef74b1235911_prof);

        
        $__internal_531989bca78ef52b1d7edbeed78c50016c0d11291129913bb972ebb7b0b33862->leave($__internal_531989bca78ef52b1d7edbeed78c50016c0d11291129913bb972ebb7b0b33862_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6741d377c2c41f6413468eb93b42fad2acb2ae9ee5f3c02a643adac891015622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6741d377c2c41f6413468eb93b42fad2acb2ae9ee5f3c02a643adac891015622->enter($__internal_6741d377c2c41f6413468eb93b42fad2acb2ae9ee5f3c02a643adac891015622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4a2f9fa6387b6d3c5bc7634f7d3d588298612bce6e94cee88285095d63ceb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a2f9fa6387b6d3c5bc7634f7d3d588298612bce6e94cee88285095d63ceb91->enter($__internal_b4a2f9fa6387b6d3c5bc7634f7d3d588298612bce6e94cee88285095d63ceb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b4a2f9fa6387b6d3c5bc7634f7d3d588298612bce6e94cee88285095d63ceb91->leave($__internal_b4a2f9fa6387b6d3c5bc7634f7d3d588298612bce6e94cee88285095d63ceb91_prof);

        
        $__internal_6741d377c2c41f6413468eb93b42fad2acb2ae9ee5f3c02a643adac891015622->leave($__internal_6741d377c2c41f6413468eb93b42fad2acb2ae9ee5f3c02a643adac891015622_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_239ca83683cd1062567209da8a215bf0360bba9fb278d70151b78d173f959e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239ca83683cd1062567209da8a215bf0360bba9fb278d70151b78d173f959e3c->enter($__internal_239ca83683cd1062567209da8a215bf0360bba9fb278d70151b78d173f959e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_29470c23dd6ac783085bee708b1ab402f030cd80898c5ce20fd849812f0e1d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29470c23dd6ac783085bee708b1ab402f030cd80898c5ce20fd849812f0e1d84->enter($__internal_29470c23dd6ac783085bee708b1ab402f030cd80898c5ce20fd849812f0e1d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29470c23dd6ac783085bee708b1ab402f030cd80898c5ce20fd849812f0e1d84->leave($__internal_29470c23dd6ac783085bee708b1ab402f030cd80898c5ce20fd849812f0e1d84_prof);

        
        $__internal_239ca83683cd1062567209da8a215bf0360bba9fb278d70151b78d173f959e3c->leave($__internal_239ca83683cd1062567209da8a215bf0360bba9fb278d70151b78d173f959e3c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 12,  101 => 11,  84 => 6,  66 => 5,  54 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/app/Resources/views/base.html.twig");
    }
}
