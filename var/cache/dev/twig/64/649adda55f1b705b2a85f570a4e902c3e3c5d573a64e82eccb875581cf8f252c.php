<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3ef1300d4d49419b23d5ccee175252f205b14003cd658f1291f73fde2a7db7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ef1300d4d49419b23d5ccee175252f205b14003cd658f1291f73fde2a7db7f->enter($__internal_a3ef1300d4d49419b23d5ccee175252f205b14003cd658f1291f73fde2a7db7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9f6736cac59df1e507ac46d2a3152eb1ca5b0a41d30426175b27dc1dbc53f15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6736cac59df1e507ac46d2a3152eb1ca5b0a41d30426175b27dc1dbc53f15c->enter($__internal_9f6736cac59df1e507ac46d2a3152eb1ca5b0a41d30426175b27dc1dbc53f15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3ef1300d4d49419b23d5ccee175252f205b14003cd658f1291f73fde2a7db7f->leave($__internal_a3ef1300d4d49419b23d5ccee175252f205b14003cd658f1291f73fde2a7db7f_prof);

        
        $__internal_9f6736cac59df1e507ac46d2a3152eb1ca5b0a41d30426175b27dc1dbc53f15c->leave($__internal_9f6736cac59df1e507ac46d2a3152eb1ca5b0a41d30426175b27dc1dbc53f15c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21fbe25c63312a392cb2df72bc5beb2ddb9f499f0001ba532e19e6f6207bca4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fbe25c63312a392cb2df72bc5beb2ddb9f499f0001ba532e19e6f6207bca4c->enter($__internal_21fbe25c63312a392cb2df72bc5beb2ddb9f499f0001ba532e19e6f6207bca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8c86a5e33c514b98206a44b9c82be258fdaf19780edac8d2bed10a90d4075d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c86a5e33c514b98206a44b9c82be258fdaf19780edac8d2bed10a90d4075d78->enter($__internal_8c86a5e33c514b98206a44b9c82be258fdaf19780edac8d2bed10a90d4075d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c86a5e33c514b98206a44b9c82be258fdaf19780edac8d2bed10a90d4075d78->leave($__internal_8c86a5e33c514b98206a44b9c82be258fdaf19780edac8d2bed10a90d4075d78_prof);

        
        $__internal_21fbe25c63312a392cb2df72bc5beb2ddb9f499f0001ba532e19e6f6207bca4c->leave($__internal_21fbe25c63312a392cb2df72bc5beb2ddb9f499f0001ba532e19e6f6207bca4c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e4390ea2c262763be8cfc94cccd4c61470dd8ed34a29f432c7e3b2201152b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4390ea2c262763be8cfc94cccd4c61470dd8ed34a29f432c7e3b2201152b5c->enter($__internal_6e4390ea2c262763be8cfc94cccd4c61470dd8ed34a29f432c7e3b2201152b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_35f767ebe5c222caa422c9c026da1bf760b30b6a1f338ee734700ee284897078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f767ebe5c222caa422c9c026da1bf760b30b6a1f338ee734700ee284897078->enter($__internal_35f767ebe5c222caa422c9c026da1bf760b30b6a1f338ee734700ee284897078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_35f767ebe5c222caa422c9c026da1bf760b30b6a1f338ee734700ee284897078->leave($__internal_35f767ebe5c222caa422c9c026da1bf760b30b6a1f338ee734700ee284897078_prof);

        
        $__internal_6e4390ea2c262763be8cfc94cccd4c61470dd8ed34a29f432c7e3b2201152b5c->leave($__internal_6e4390ea2c262763be8cfc94cccd4c61470dd8ed34a29f432c7e3b2201152b5c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32b4d0482288b511c526f3f8db22942739a11997bf94ae21850af9d6d9e57982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b4d0482288b511c526f3f8db22942739a11997bf94ae21850af9d6d9e57982->enter($__internal_32b4d0482288b511c526f3f8db22942739a11997bf94ae21850af9d6d9e57982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e6c1f8eeff43b8b7f4bb3288659f6023dcb36812acafe47923c94001c54311ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c1f8eeff43b8b7f4bb3288659f6023dcb36812acafe47923c94001c54311ed->enter($__internal_e6c1f8eeff43b8b7f4bb3288659f6023dcb36812acafe47923c94001c54311ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6c1f8eeff43b8b7f4bb3288659f6023dcb36812acafe47923c94001c54311ed->leave($__internal_e6c1f8eeff43b8b7f4bb3288659f6023dcb36812acafe47923c94001c54311ed_prof);

        
        $__internal_32b4d0482288b511c526f3f8db22942739a11997bf94ae21850af9d6d9e57982->leave($__internal_32b4d0482288b511c526f3f8db22942739a11997bf94ae21850af9d6d9e57982_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
