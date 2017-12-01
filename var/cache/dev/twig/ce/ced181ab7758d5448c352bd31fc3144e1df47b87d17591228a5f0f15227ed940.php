<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_f66ef454a91b150ca6dbed286a4264b7ae2398375c98adaa6bbcb7a09750f2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3304e33842f20c723213ff582b73ba22dc42ba3cd1d450a3a8dad0d6d99b2870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3304e33842f20c723213ff582b73ba22dc42ba3cd1d450a3a8dad0d6d99b2870->enter($__internal_3304e33842f20c723213ff582b73ba22dc42ba3cd1d450a3a8dad0d6d99b2870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $__internal_a2bad08ebdc65dc6feaec00351e70e6960e1fbc78eaa58d759b2e515143ea9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bad08ebdc65dc6feaec00351e70e6960e1fbc78eaa58d759b2e515143ea9db->enter($__internal_a2bad08ebdc65dc6feaec00351e70e6960e1fbc78eaa58d759b2e515143ea9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3304e33842f20c723213ff582b73ba22dc42ba3cd1d450a3a8dad0d6d99b2870->leave($__internal_3304e33842f20c723213ff582b73ba22dc42ba3cd1d450a3a8dad0d6d99b2870_prof);

        
        $__internal_a2bad08ebdc65dc6feaec00351e70e6960e1fbc78eaa58d759b2e515143ea9db->leave($__internal_a2bad08ebdc65dc6feaec00351e70e6960e1fbc78eaa58d759b2e515143ea9db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0006a33d32b563559ddb5bcc7c34ff89f0805cb41b648b2756345d6d7f99dbf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0006a33d32b563559ddb5bcc7c34ff89f0805cb41b648b2756345d6d7f99dbf9->enter($__internal_0006a33d32b563559ddb5bcc7c34ff89f0805cb41b648b2756345d6d7f99dbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ee8ff0b5934fcc02fb603024cd5ca6bbd1358f7ca0790b8e07b04d75c9c666c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee8ff0b5934fcc02fb603024cd5ca6bbd1358f7ca0790b8e07b04d75c9c666c->enter($__internal_0ee8ff0b5934fcc02fb603024cd5ca6bbd1358f7ca0790b8e07b04d75c9c666c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_0ee8ff0b5934fcc02fb603024cd5ca6bbd1358f7ca0790b8e07b04d75c9c666c->leave($__internal_0ee8ff0b5934fcc02fb603024cd5ca6bbd1358f7ca0790b8e07b04d75c9c666c_prof);

        
        $__internal_0006a33d32b563559ddb5bcc7c34ff89f0805cb41b648b2756345d6d7f99dbf9->leave($__internal_0006a33d32b563559ddb5bcc7c34ff89f0805cb41b648b2756345d6d7f99dbf9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b87d0fea1451f2320dd8d5c13553546d7d8359e115ac4fed8d27086cc8d4ab87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87d0fea1451f2320dd8d5c13553546d7d8359e115ac4fed8d27086cc8d4ab87->enter($__internal_b87d0fea1451f2320dd8d5c13553546d7d8359e115ac4fed8d27086cc8d4ab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d3e2b5e83e09e0b2df9a7fa939c56d9d0b854748df50e0f00ccdbc5aa143e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3e2b5e83e09e0b2df9a7fa939c56d9d0b854748df50e0f00ccdbc5aa143e64->enter($__internal_0d3e2b5e83e09e0b2df9a7fa939c56d9d0b854748df50e0f00ccdbc5aa143e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_0d3e2b5e83e09e0b2df9a7fa939c56d9d0b854748df50e0f00ccdbc5aa143e64->leave($__internal_0d3e2b5e83e09e0b2df9a7fa939c56d9d0b854748df50e0f00ccdbc5aa143e64_prof);

        
        $__internal_b87d0fea1451f2320dd8d5c13553546d7d8359e115ac4fed8d27086cc8d4ab87->leave($__internal_b87d0fea1451f2320dd8d5c13553546d7d8359e115ac4fed8d27086cc8d4ab87_prof);

    }

    // line 52
    public function getrender_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f60d34c0fc45ab5818d2f2bafd225263452168c4ef9aecd7c223456f7f1d0bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f60d34c0fc45ab5818d2f2bafd225263452168c4ef9aecd7c223456f7f1d0bb1->enter($__internal_f60d34c0fc45ab5818d2f2bafd225263452168c4ef9aecd7c223456f7f1d0bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_feb1c7ecdddadfbe784d39a490ae695bbe675d3d17fcaa87c066ef6c8e71f831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_feb1c7ecdddadfbe784d39a490ae695bbe675d3d17fcaa87c066ef6c8e71f831->enter($__internal_feb1c7ecdddadfbe784d39a490ae695bbe675d3d17fcaa87c066ef6c8e71f831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = $this->getAttribute(twig_first($this->env, ($context["listeners"] ?? $this->getContext($context, "listeners"))), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listeners"] ?? $this->getContext($context, "listeners")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if (($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($context["listener"], "event", array()) != ($context["previous_event"] ?? $this->getContext($context, "previous_event"))))) {
                    // line 64
                    echo "                ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = $this->getAttribute($context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "stub", array())));
                echo "</td>
            </tr>

            ";
                // line 81
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>
            ";
                }
                // line 84
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>
";
            
            $__internal_feb1c7ecdddadfbe784d39a490ae695bbe675d3d17fcaa87c066ef6c8e71f831->leave($__internal_feb1c7ecdddadfbe784d39a490ae695bbe675d3d17fcaa87c066ef6c8e71f831_prof);

            
            $__internal_f60d34c0fc45ab5818d2f2bafd225263452168c4ef9aecd7c223456f7f1d0bb1->leave($__internal_f60d34c0fc45ab5818d2f2bafd225263452168c4ef9aecd7c223456f7f1d0bb1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  243 => 84,  239 => 82,  237 => 81,  231 => 78,  227 => 77,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  207 => 67,  203 => 65,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  167 => 53,  149 => 52,  135 => 46,  129 => 44,  116 => 33,  114 => 32,  109 => 30,  101 => 25,  95 => 22,  91 => 20,  85 => 16,  83 => 15,  79 => 13,  70 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
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

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "@WebProfiler/Collector/events.html.twig", "/home/mikolaj/Workspace/coderslab/WAR_PHP_S_10_Warsztaty_5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/events.html.twig");
    }
}
