<?php

/* default.json.twig */
class __TwigTemplate_f0ee7580455988e2b2d910c3c0718cdc4d79a96e74e7204b8e0902be73980568 extends Twig_Template
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
        // line 1
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "json_response", array())) {
            // line 2
            echo twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "json_response", array()));
            echo "
";
        } else {
            // line 4
            echo "{}
";
        }
    }

    public function getTemplateName()
    {
        return "default.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if admin.json_response %}
{{ admin.json_response|json_encode|raw }}
{% else %}
{}
{% endif %}
", "default.json.twig", "C:\\Users\\Brendan\\Documents\\Make It Lane\\make-it-lane.git\\public_html\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\default.json.twig");
    }
}
