<?php

/* themes/d8w3css/templates/dataset/forum-list.html.twig */
class __TwigTemplate_579309767fd3db04b6dfa751721b87c0d86cbafc6df663e8804348eb60b921f6 extends Twig_Template
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
        $tags = array("for" => 44, "if" => 46);
        $filters = array("t" => 37);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 33
        echo "<div class=\"w3-responsive\">
  <table class=\"w3-table-all\" id=\"forum-";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["forum_id"] ?? null), "html", null, true));
        echo "\">
    <thead>
      <tr>
        <th>";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Forum")));
        echo "</th>
        <th>";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Topics")));
        echo "</th>
        <th>";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Posts")));
        echo "</th>
        <th>";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last post")));
        echo "</th>
      </tr>
    </thead>
    <tbody>
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forums"] ?? null));
        foreach ($context['_seq'] as $context["child_id"] => $context["forum"]) {
            // line 45
            echo "      <tr id=\"forum-list-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["child_id"], "html", null, true));
            echo "\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "zebra", array()), "html", null, true));
            echo "\">
        <td ";
            // line 46
            if (($this->getAttribute($context["forum"], "is_container", array()) == true)) {
                // line 47
                echo "colspan=\"4\" class=\"container\"";
            } else {
                // line 49
                echo "class=\"forum-list__forum\"";
            }
            // line 50
            echo ">
          ";
            // line 56
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["forum"], "depth", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["forum"], "depth", array()) > 0)) {
                    echo "<div class=\"indented\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            <div class=\"forum__icon forum-status-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "icon_class", array()), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "icon_title", array()), "html", null, true));
            echo "\">
              <span class=\"visually-hidden\">";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "icon_title", array()), "html", null, true));
            echo "</span>
            </div>
            <div class=\"forum__name\"><a href=\"";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "link", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "label", array()), "html", null, true));
            echo "</a></div>
            ";
            // line 61
            if ($this->getAttribute($this->getAttribute($context["forum"], "description", array()), "value", array())) {
                // line 62
                echo "              <div class=\"w3-small forum__description\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["forum"], "description", array()), "value", array()), "html", null, true));
                echo "</div>
            ";
            }
            // line 64
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["forum"], "depth", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["forum"], "depth", array()) > 0)) {
                    echo "</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        </td>
        ";
            // line 66
            if (($this->getAttribute($context["forum"], "is_container", array()) == false)) {
                // line 67
                echo "          <td class=\"forum__topics\">
            ";
                // line 68
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "num_topics", array()), "html", null, true));
                echo "
            ";
                // line 69
                if (($this->getAttribute($context["forum"], "new_topics", array()) == true)) {
                    // line 70
                    echo "              <br />
              <a href=\"";
                    // line 71
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "new_url", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "new_text", array()), "html", null, true));
                    echo "</a>
            ";
                }
                // line 73
                echo "          </td>
          <td class=\"forum__posts\">";
                // line 74
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "num_posts", array()), "html", null, true));
                echo "</td>
          <td class=\"forum__last-reply\">";
                // line 75
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["forum"], "last_reply", array()), "html", null, true));
                echo "</td>
        ";
            }
            // line 77
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['child_id'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </tbody>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/d8w3css/templates/dataset/forum-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 79,  179 => 77,  174 => 75,  170 => 74,  167 => 73,  160 => 71,  157 => 70,  155 => 69,  151 => 68,  148 => 67,  146 => 66,  143 => 65,  131 => 64,  125 => 62,  123 => 61,  117 => 60,  112 => 58,  105 => 57,  93 => 56,  90 => 50,  87 => 49,  84 => 47,  82 => 46,  75 => 45,  71 => 44,  64 => 40,  60 => 39,  56 => 38,  52 => 37,  46 => 34,  43 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/d8w3css/templates/dataset/forum-list.html.twig", "/Users/Hannes/Documents/development/htdocs/drupal3/themes/d8w3css/templates/dataset/forum-list.html.twig");
    }
}
