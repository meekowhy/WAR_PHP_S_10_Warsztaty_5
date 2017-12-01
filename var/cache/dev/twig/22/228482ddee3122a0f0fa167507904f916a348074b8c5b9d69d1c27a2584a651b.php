<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7f9ef577faef357a172e6ba4d7892a15a1e56f5fd91733d4526b6a90faecf3a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_19c92c4621047168a8fc35fadcb399e9b900dc2c8d158c2bc7786014ec3ca4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c92c4621047168a8fc35fadcb399e9b900dc2c8d158c2bc7786014ec3ca4f7->enter($__internal_19c92c4621047168a8fc35fadcb399e9b900dc2c8d158c2bc7786014ec3ca4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5a7cb6779605355e3f7d0ad071969449a83153b1b38e74c230a9126c1220e660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7cb6779605355e3f7d0ad071969449a83153b1b38e74c230a9126c1220e660->enter($__internal_5a7cb6779605355e3f7d0ad071969449a83153b1b38e74c230a9126c1220e660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19c92c4621047168a8fc35fadcb399e9b900dc2c8d158c2bc7786014ec3ca4f7->leave($__internal_19c92c4621047168a8fc35fadcb399e9b900dc2c8d158c2bc7786014ec3ca4f7_prof);

        
        $__internal_5a7cb6779605355e3f7d0ad071969449a83153b1b38e74c230a9126c1220e660->leave($__internal_5a7cb6779605355e3f7d0ad071969449a83153b1b38e74c230a9126c1220e660_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2b547557fa61744a267f934f0c4b8001993287d40d073209c2b8da56a378a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b547557fa61744a267f934f0c4b8001993287d40d073209c2b8da56a378a99->enter($__internal_d2b547557fa61744a267f934f0c4b8001993287d40d073209c2b8da56a378a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_880980d0fad3c42ddb881e263abe241bd8fdbd40cf38047691cb271904675d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880980d0fad3c42ddb881e263abe241bd8fdbd40cf38047691cb271904675d5c->enter($__internal_880980d0fad3c42ddb881e263abe241bd8fdbd40cf38047691cb271904675d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_880980d0fad3c42ddb881e263abe241bd8fdbd40cf38047691cb271904675d5c->leave($__internal_880980d0fad3c42ddb881e263abe241bd8fdbd40cf38047691cb271904675d5c_prof);

        
        $__internal_d2b547557fa61744a267f934f0c4b8001993287d40d073209c2b8da56a378a99->leave($__internal_d2b547557fa61744a267f934f0c4b8001993287d40d073209c2b8da56a378a99_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
