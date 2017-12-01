<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_a77d1d245ea84f87e1901a3908a7963cef85faf8d1c5541b0d62439e72afcadf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d37d5b2793d07a1db14f8f1702087708cf691edd538172bf3cd66d561d97330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d37d5b2793d07a1db14f8f1702087708cf691edd538172bf3cd66d561d97330->enter($__internal_4d37d5b2793d07a1db14f8f1702087708cf691edd538172bf3cd66d561d97330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $__internal_a073c716f1d51256779dfe19f058b939bae63b7a61b1a479e1743c49abbc3b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a073c716f1d51256779dfe19f058b939bae63b7a61b1a479e1743c49abbc3b2b->enter($__internal_a073c716f1d51256779dfe19f058b939bae63b7a61b1a479e1743c49abbc3b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d37d5b2793d07a1db14f8f1702087708cf691edd538172bf3cd66d561d97330->leave($__internal_4d37d5b2793d07a1db14f8f1702087708cf691edd538172bf3cd66d561d97330_prof);

        
        $__internal_a073c716f1d51256779dfe19f058b939bae63b7a61b1a479e1743c49abbc3b2b->leave($__internal_a073c716f1d51256779dfe19f058b939bae63b7a61b1a479e1743c49abbc3b2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_182e3c52f9ee108ebaf1977b0bffa7b98ff14b6d6d2eaedb73d9dae4f2b672cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182e3c52f9ee108ebaf1977b0bffa7b98ff14b6d6d2eaedb73d9dae4f2b672cc->enter($__internal_182e3c52f9ee108ebaf1977b0bffa7b98ff14b6d6d2eaedb73d9dae4f2b672cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8a6e4569f9e372e910cfc1054b0600c7e5aa22b80cf3d41b16fd80f94cc0a47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6e4569f9e372e910cfc1054b0600c7e5aa22b80cf3d41b16fd80f94cc0a47a->enter($__internal_8a6e4569f9e372e910cfc1054b0600c7e5aa22b80cf3d41b16fd80f94cc0a47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = ((((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "name" => "time", "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        echo "
";
        
        $__internal_8a6e4569f9e372e910cfc1054b0600c7e5aa22b80cf3d41b16fd80f94cc0a47a->leave($__internal_8a6e4569f9e372e910cfc1054b0600c7e5aa22b80cf3d41b16fd80f94cc0a47a_prof);

        
        $__internal_182e3c52f9ee108ebaf1977b0bffa7b98ff14b6d6d2eaedb73d9dae4f2b672cc->leave($__internal_182e3c52f9ee108ebaf1977b0bffa7b98ff14b6d6d2eaedb73d9dae4f2b672cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  89 => 22,  83 => 19,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "@WebProfiler/Collector/memory.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/memory.html.twig");
    }
}
