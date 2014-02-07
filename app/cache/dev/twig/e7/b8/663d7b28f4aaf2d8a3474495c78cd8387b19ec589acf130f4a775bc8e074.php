<?php

/* JDareClankBundle::client.html.twig */
class __TwigTemplate_e7b8663d7b28f4aaf2d8a3474495c78cd8387b19ec589acf130f4a775bc8e074 extends Twig_Template
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
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7946a9a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7946a9a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7946a9a_part_1_clank_1.js");
            // line 5
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "7946a9a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7946a9a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7946a9a_part_2_autobahn.min_1.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "7946a9a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7946a9a") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7946a9a.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "JDareClankBundle::client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 5,  19 => 1,  98 => 40,  93 => 9,  80 => 41,  46 => 10,  44 => 9,  40 => 8,  32 => 6,  27 => 4,  22 => 1,  150 => 28,  143 => 20,  140 => 19,  133 => 22,  131 => 19,  128 => 18,  125 => 17,  103 => 38,  100 => 37,  94 => 34,  90 => 32,  88 => 6,  84 => 29,  82 => 28,  78 => 40,  76 => 17,  73 => 16,  64 => 13,  61 => 12,  56 => 11,  47 => 8,  41 => 5,  33 => 3,  59 => 13,  53 => 10,  49 => 10,  45 => 8,  42 => 7,  36 => 7,  30 => 3,);
    }
}
