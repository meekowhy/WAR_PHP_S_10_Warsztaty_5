<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_a286a17e012f7a183ec629d431be44060075735980e77fd06aa48a4f9b63bccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
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
        $__internal_f7d4f40cc0f20c76ce6cb3b4635da7619debb1f86ab66d6fae4c398471a0a1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d4f40cc0f20c76ce6cb3b4635da7619debb1f86ab66d6fae4c398471a0a1a2->enter($__internal_f7d4f40cc0f20c76ce6cb3b4635da7619debb1f86ab66d6fae4c398471a0a1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_5dc94b0d3fa33bd9e8eb8bdc3762bcedfa04951e63c2ec008ee5941cc502780d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc94b0d3fa33bd9e8eb8bdc3762bcedfa04951e63c2ec008ee5941cc502780d->enter($__internal_5dc94b0d3fa33bd9e8eb8bdc3762bcedfa04951e63c2ec008ee5941cc502780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d4f40cc0f20c76ce6cb3b4635da7619debb1f86ab66d6fae4c398471a0a1a2->leave($__internal_f7d4f40cc0f20c76ce6cb3b4635da7619debb1f86ab66d6fae4c398471a0a1a2_prof);

        
        $__internal_5dc94b0d3fa33bd9e8eb8bdc3762bcedfa04951e63c2ec008ee5941cc502780d->leave($__internal_5dc94b0d3fa33bd9e8eb8bdc3762bcedfa04951e63c2ec008ee5941cc502780d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d74406ae3a6aecaf47d8279452c9ed6fdaed4780e7d1d1233562b7cfacb8522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d74406ae3a6aecaf47d8279452c9ed6fdaed4780e7d1d1233562b7cfacb8522->enter($__internal_5d74406ae3a6aecaf47d8279452c9ed6fdaed4780e7d1d1233562b7cfacb8522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a1cd5890e6da64d4acc0f076afa39a4f83d3c3842043ca8a7129ae1fa3041d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cd5890e6da64d4acc0f076afa39a4f83d3c3842043ca8a7129ae1fa3041d82->enter($__internal_a1cd5890e6da64d4acc0f076afa39a4f83d3c3842043ca8a7129ae1fa3041d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
        echo "
";
        
        $__internal_a1cd5890e6da64d4acc0f076afa39a4f83d3c3842043ca8a7129ae1fa3041d82->leave($__internal_a1cd5890e6da64d4acc0f076afa39a4f83d3c3842043ca8a7129ae1fa3041d82_prof);

        
        $__internal_5d74406ae3a6aecaf47d8279452c9ed6fdaed4780e7d1d1233562b7cfacb8522->leave($__internal_5d74406ae3a6aecaf47d8279452c9ed6fdaed4780e7d1d1233562b7cfacb8522_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_941dd3d14748e3a07363c95838e22d4aecee54f649ed0cc66b9d205019ecc7c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941dd3d14748e3a07363c95838e22d4aecee54f649ed0cc66b9d205019ecc7c4->enter($__internal_941dd3d14748e3a07363c95838e22d4aecee54f649ed0cc66b9d205019ecc7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_64124b4b8a68a3efd30cec73da4b3a67071cf0dad4b66e26a98fc895b7cbce34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64124b4b8a68a3efd30cec73da4b3a67071cf0dad4b66e26a98fc895b7cbce34->enter($__internal_64124b4b8a68a3efd30cec73da4b3a67071cf0dad4b66e26a98fc895b7cbce34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_64124b4b8a68a3efd30cec73da4b3a67071cf0dad4b66e26a98fc895b7cbce34->leave($__internal_64124b4b8a68a3efd30cec73da4b3a67071cf0dad4b66e26a98fc895b7cbce34_prof);

        
        $__internal_941dd3d14748e3a07363c95838e22d4aecee54f649ed0cc66b9d205019ecc7c4->leave($__internal_941dd3d14748e3a07363c95838e22d4aecee54f649ed0cc66b9d205019ecc7c4_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d35e41f7d7b9c18d16aadc6f0b220ea5eb9bb2aae4af03e557c137cd4e04a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d35e41f7d7b9c18d16aadc6f0b220ea5eb9bb2aae4af03e557c137cd4e04a0c->enter($__internal_6d35e41f7d7b9c18d16aadc6f0b220ea5eb9bb2aae4af03e557c137cd4e04a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a48861137834e52443a35094cb2a36a678b26b86725c7c7ff91144d6953e0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a48861137834e52443a35094cb2a36a678b26b86725c7c7ff91144d6953e0b1->enter($__internal_7a48861137834e52443a35094cb2a36a678b26b86725c7c7ff91144d6953e0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_7a48861137834e52443a35094cb2a36a678b26b86725c7c7ff91144d6953e0b1->leave($__internal_7a48861137834e52443a35094cb2a36a678b26b86725c7c7ff91144d6953e0b1_prof);

        
        $__internal_6d35e41f7d7b9c18d16aadc6f0b220ea5eb9bb2aae4af03e557c137cd4e04a0c->leave($__internal_6d35e41f7d7b9c18d16aadc6f0b220ea5eb9bb2aae4af03e557c137cd4e04a0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 98,  237 => 92,  228 => 89,  224 => 88,  221 => 87,  217 => 86,  195 => 67,  187 => 62,  179 => 57,  171 => 52,  165 => 48,  157 => 42,  154 => 41,  145 => 40,  131 => 35,  128 => 34,  119 => 33,  107 => 30,  104 => 29,  98 => 26,  91 => 22,  84 => 18,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    <td>{{ template }}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/twig.html.twig");
    }
}
