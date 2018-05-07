<?php

/* themes/d8w3css/templates/layout/page.html.twig */
class __TwigTemplate_5a750be56cc20687cf23f56c4c1342eea346c63a2a9977c70e692d15cb360722 extends Twig_Template
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
        $tags = array("if" => 57);
        $filters = array("t" => 59);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 57
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu_vertical", array())) {
            // line 58
            echo "  <!-- Start: Main Navigation - Vertical -->
  <div id=\"main-navigation-v\" class=\"main-navigation-wrapper w3-sidebar w3-bar-block w3-animate-left w3-card w3-theme ";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_primary_menu"] ?? null), "html", null, true));
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Main Navigation")));
            echo "\" >
    <div id=\"main-navigation-inner-v\" class=\"main-navigation-inner-v\">
      <i id=\"close-nav\" class=\"close-nav fa fa-bars w3-button w3-bar-block w3-xlarge w3-theme ";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_primary_menu"] ?? null), "html", null, true));
            echo "\"></i>
        ";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu_vertical", array()), "html", null, true));
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Vertical -->
";
        }
        // line 67
        echo "<!-- Start: Page Wrapper -->
<div class=\"page-wrapper w3-col w3-clear w3-animate-opacity w3-text-theme ";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_page_wrapper"] ?? null), "html", null, true));
        echo " \">
  <!-- Start: Header -->
  <header id=\"header\" class=\"w3-col w3-clear w3-theme-l4 ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_header"] ?? null), "html", null, true));
        echo "\" role=\"banner\" aria-label=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
    <div id=\"header-inner\" class=\"d8-fade w3-container header-inner ";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
        echo "\">
      ";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu_vertical", array())) {
            // line 73
            echo "        <div id=\"open-nav-inner\" class=\"open-nav-inner w3-opacity w3-hover-opacity-off w3-left fa fa-bars w3-button w3-left-align w3-xxlarge w3-theme ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_primary_menu"] ?? null), "html", null, true));
            echo "\"></div>
      ";
        }
        // line 75
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 76
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
      ";
        }
        // line 78
        echo "    </div>
  </header>
  <!-- End: Header -->
  ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 82
            echo "  <!-- Start: Main Navigation - Horizontal -->
  <div id=\"main-navigation-h\" class=\"w3-col w3-clear main-navigation-wrapper w3-card w3-theme ";
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_primary_menu"] ?? null), "html", null, true));
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Main Navigation")));
            echo "\" >
    <div id=\"main-navigation-inner-h\" class=\"d8-fade w3-row main-navigation-inner-h ";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
            echo "\">
        <i class=\"mobile-nav fa fa-bars w3-hide-large w3-button w3-block w3-right-align w3-xxlarge w3-theme ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_primary_menu"] ?? null), "html", null, true));
            echo "\"></i>
        ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Horizontal -->
  ";
        }
        // line 91
        echo "  ";
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "welcome_text", array()))) {
            // line 92
            echo "    <!-- Start: Welcome Text -->
    <div id=\"welcome-text\" class=\"w3-col w3-clear w3-theme-l5 ";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_welcome_text"] ?? null), "html", null, true));
            echo "\">
      <div id=\"welcome-text-inner\" class=\"d8-fade w3-row welcome-text-inner ";
            // line 94
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 95
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "welcome_text", array()), "html", null, true));
            echo "
      </div>
    </div>
    <!-- End: Welcome Text -->
  ";
        }
        // line 100
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 101
            echo "    <!-- Start: Highlighted -->
    <div id=\"highlighted\" class=\"w3-col w3-clear w3-theme-l2 ";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_highlighted"] ?? null), "html", null, true));
            echo "\">
      <div id=\"highlighted-inner\" class=\"d8-fade w3-row highlighted-inner ";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
      </div>
    </div>
    <!-- End: Highlighted -->
  ";
        }
        // line 109
        echo "  ";
        if (($context["is_front"] ?? null)) {
            // line 110
            echo "    ";
            if ((($this->getAttribute(($context["page"] ?? null), "top_first", array()) || $this->getAttribute(($context["page"] ?? null), "top_second", array())) || $this->getAttribute(($context["page"] ?? null), "top_third", array()))) {
                // line 111
                echo "      <!-- Start: Top Container -->
      <div id=\"top-container\" class=\"w3-col w3-clear w3-theme-l4 ";
                // line 112
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_top_container"] ?? null), "html", null, true));
                echo "\">
        <div id=\"top-container-inner\" class=\"w3-row-padding w3-padding-large top-container-inner ";
                // line 113
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
                echo "\">

          ";
                // line 115
                if ($this->getAttribute(($context["page"] ?? null), "top_first", array())) {
                    // line 116
                    echo "            <!-- Start: Top container first region -->
            <div class=\"";
                    // line 117
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["top_w3css"] ?? null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : (""))));
                    echo " first-top\" >
              <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 118
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_top_first"] ?? null), "html", null, true));
                    echo "\">
               ";
                    // line 119
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_first", array()), "html", null, true));
                    echo "
              </div>
            </div>
            <!-- End: Top Container First -->
          ";
                }
                // line 124
                echo "          ";
                if ($this->getAttribute(($context["page"] ?? null), "top_second", array())) {
                    // line 125
                    echo "            <!-- Start: Top Container Second  -->
            <div class=\"";
                    // line 126
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["top_w3css"] ?? null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : (""))));
                    echo " second-top\">
              <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 127
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_top_second"] ?? null), "html", null, true));
                    echo "\">
               ";
                    // line 128
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_second", array()), "html", null, true));
                    echo "
              </div>
            </div>
            <!-- End: Top Container Second -->
          ";
                }
                // line 133
                echo "          ";
                if ($this->getAttribute(($context["page"] ?? null), "top_third", array())) {
                    // line 134
                    echo "          <!-- Start: Top Container Third -->
          <div class=\"";
                    // line 135
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["top_w3css"] ?? null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : (""))));
                    echo " third-top\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 136
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_top_third"] ?? null), "html", null, true));
                    echo "\">
              ";
                    // line 137
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_third", array()), "html", null, true));
                    echo "
            </div>
          </div>
          <!-- End: Top Container Third -->
          ";
                }
                // line 142
                echo "        </div>
      </div>
      <!-- End: Top container -->
    ";
            }
            // line 146
            echo "  ";
        }
        // line 147
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 148
            echo "    <!-- Start: Page Title -->
    <div id=\"page-title\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 149
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_page_title"] ?? null), "html", null, true));
            echo "\">
      <div id=\"page-title-inner\" class=\"d8-fade w3-row page-title-inner ";
            // line 150
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 151
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
    <!-- End: Page Title -- >
  ";
        }
        // line 156
        echo "  <!-- Start: Main -->
  <div id=\"main-container\" class=\"w3-col w3-clear w3-theme-l5 ";
        // line 157
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_main"] ?? null), "html", null, true));
        echo "\">
    <div id=\"main-container-inner\" class=\"w3-container main-container-inner ";
        // line 158
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
        echo "\">
      ";
        // line 159
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 160
            echo "        <!-- Breadcrumb -->
        <div class=\"";
            // line 161
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_breadcrumb"] ?? null), "html", null, true));
            echo "\">
          ";
            // line 162
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
        </div>
        <!-- End: Breadcrumb -->
      ";
        }
        // line 166
        echo "      <!-- Start Main Container  -->
      <div class=\"w3-col w3-clear w3-row-padding\">
        ";
        // line 168
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 169
            echo "          <!-- Start Left SideBar -->
          <div class =\"";
            // line 170
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : (""))));
            echo " first-sidebar\">
            <div class=\"d8-fade w3-card w3-round w3-sidebar-first w3-mobile ";
            // line 171
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_sidebar_first"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 172
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
            </div>
          </div>
          <!-- End: Left SideBar -->
        ";
        }
        // line 177
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 178
            echo "          <!-- Start: Main Content -->
          <div class=\"";
            // line 179
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_w3css"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : (""))));
            echo " w3css-content\">
            <div class=\"d8-fade w3-card w3-round w3-mobile  ";
            // line 180
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_content"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 181
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
            </div>
          </div>
          <!-- End: Main Content -->
        ";
        }
        // line 186
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 187
            echo "          <!-- Start: Right SideBar -->
          <div class=\"";
            // line 188
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : (""))));
            echo " second-sidebar\">
            <div class=\"d8-fade w3-card w3-round w3-sidebar-second w3-mobile ";
            // line 189
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_sidebar_second"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 190
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
            </div>
          </div>
          <!-- End: Right SideBar -->
        ";
        }
        // line 195
        echo "      </div>
      <!-- Endn: Main Container  -->
    </div>
  </div>
  <!-- End: Main -->
  ";
        // line 200
        if (($context["is_front"] ?? null)) {
            // line 201
            echo "    ";
            if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_third", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()))) {
                // line 202
                echo "      <!-- Start: Bottom -->
      <div id=\"bottom-container\" class=\"w3-col w3-clear w3-theme-l2 ";
                // line 203
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_bottom_container"] ?? null), "html", null, true));
                echo "\">
        <div id=\"bottom-container-inner\" class=\"w3-row-padding w3-padding-large bottom-container-inner ";
                // line 204
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 205
                if ($this->getAttribute(($context["page"] ?? null), "bottom_first", array())) {
                    // line 206
                    echo "              <!-- Start: Bottom First -->
              <div class=\"";
                    // line 207
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_w3css"] ?? null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : (""))));
                    echo " first-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 208
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_bottom_first"] ?? null), "html", null, true));
                    echo "\">
                  ";
                    // line 209
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_first", array()), "html", null, true));
                    echo "
                </div>
              </div>
              <!-- End: Bottom First -->
            ";
                }
                // line 214
                echo "            ";
                if ($this->getAttribute(($context["page"] ?? null), "bottom_second", array())) {
                    // line 215
                    echo "              <!-- Start: Bottom Second -->
              <div class=\"";
                    // line 216
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_w3css"] ?? null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : (""))));
                    echo " second-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 217
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_bottom_second"] ?? null), "html", null, true));
                    echo "\">
                  ";
                    // line 218
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_second", array()), "html", null, true));
                    echo "
                </div>
              </div>
              <!-- End: Bottom Second -->
            ";
                }
                // line 223
                echo "            ";
                if ($this->getAttribute(($context["page"] ?? null), "bottom_third", array())) {
                    // line 224
                    echo "              <!-- Start: Bottom Third  -->
              <div class=\"";
                    // line 225
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_w3css"] ?? null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : (""))));
                    echo " third-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 226
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_bottom_third"] ?? null), "html", null, true));
                    echo "\">
                  ";
                    // line 227
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_third", array()), "html", null, true));
                    echo "
                </div>
              </div>
              <!-- End: Bottom Third -->
            ";
                }
                // line 232
                echo "            ";
                if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", array())) {
                    // line 233
                    echo "              <!-- Start: Bottom Forth  -->
              <div class =\"";
                    // line 234
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_w3css"] ?? null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : (""))));
                    echo " forth-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 235
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_bottom_forth"] ?? null), "html", null, true));
                    echo "\">
                  ";
                    // line 236
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()), "html", null, true));
                    echo "
                </div>
              </div>
              <!-- End: Bottom Forth -->
            ";
                }
                // line 241
                echo "        </div>
      </div>
      <!-- End: Bottom -->
    ";
            }
            // line 245
            echo "  ";
        }
        // line 246
        echo "  ";
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array()))) {
            // line 247
            echo "    <!-- start: Footer -->
    <div id=\"footer-container\" class=\"w3-col w3-clear w3-theme-d3 ";
            // line 248
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_footer_container"] ?? null), "html", null, true));
            echo "\">
      <div id=\"footer-container-inner\" class=\"w3-row-padding w3-padding-large footer-container-inner ";
            // line 249
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
            echo "\">

        ";
            // line 251
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 252
                echo "          <!-- Start: Footer First  -->
          <div class=\"";
                // line 253
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_w3css"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : (""))));
                echo " first-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                // line 254
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_footer_first"] ?? null), "html", null, true));
                echo "\">
              ";
                // line 255
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          </div>
          <!-- End: Footer First -->
        ";
            }
            // line 260
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 261
                echo "          <!-- Start: Footer Second Region -->
          <div class=\"";
                // line 262
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_w3css"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : (""))));
                echo " second-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                // line 263
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_footer_second"] ?? null), "html", null, true));
                echo "\">
              ";
                // line 264
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          </div>
        <!-- End: Footer Second -->
        ";
            }
            // line 269
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 270
                echo "          <!-- Start: Footer Third -->
          <div class=\"";
                // line 271
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_w3css"] ?? null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : (""))));
                echo " third-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                // line 272
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_footer_third"] ?? null), "html", null, true));
                echo "\">
              ";
                // line 273
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          </div>
          <!-- End: Footer Third -->
        ";
            }
            // line 278
            echo "      </div>
    </div>
    <!-- End: Footer -->
  ";
        }
        // line 282
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 283
            echo "    <!-- Start: Footer Menu -->
    <div id=\"footer-menu\" class=\"w3-col w3-clear w3-card w3-theme-d4 ";
            // line 284
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_footer_menu"] ?? null), "html", null, true));
            echo "\">
      <div id=\"footer-menu-inner\" class=\"w3-row footer-menu-inner ";
            // line 285
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 286
            if (($context["show_social_icon"] ?? null)) {
                // line 287
                echo "          <!-- Start: Social Media -->
          <div class=\"d8-fade w3-center w3-container w3-mobile social-media\">
            ";
                // line 289
                if (($context["facebook_url"] ?? null)) {
                    // line 290
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 292
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 293
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 295
                echo "            ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 296
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 298
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 299
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 301
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 302
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 304
                echo "            ";
                if (($context["instagram_url"] ?? null)) {
                    // line 305
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["instagram_url"] ?? null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
            ";
                }
                // line 307
                echo "            ";
                if (($context["youtube_url"] ?? null)) {
                    // line 308
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["youtube_url"] ?? null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
            ";
                }
                // line 310
                echo "            ";
                if (($context["drupal_url"] ?? null)) {
                    // line 311
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["drupal_url"] ?? null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-drupal\"></i></a>
            ";
                }
                // line 313
                echo "            ";
                if (($context["rss_url"] ?? null)) {
                    // line 314
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true));
                    echo "\" class=\"w3-opacity w3-hover-opacity w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 316
                echo "          </div>
          <!-- End: Social Media -->
        ";
            }
            // line 319
            echo "        <!-- Start: Bottom Menu -->
        <div class=\"d8-fade w3-container w3-center w3-mobile\">
          ";
            // line 321
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        <!-- End: Bottom Menu -->
      </div>
    </div>
    <!-- End: Footer Menu -->
  ";
        }
        // line 328
        echo "  ";
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 329
            echo "    <!-- Start: Copyright -->
    <div id=\"copyright\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 330
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["color_copyright"] ?? null), "html", null, true));
            echo "\">
      <div id=\"copyright-inner\" class=\"w3-row copyright-inner ";
            // line 331
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["website_width"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 332
            if (($context["copyright_text"] ?? null)) {
                // line 333
                echo "          <!-- Start: Copyright -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-left-align w3-opacity w3-hover-opacity-off\">";
                // line 335
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["copyright_text"] ?? null), "html", null, true));
                echo "</p>
          </div>
          <!-- End: Copyright -->
        ";
            }
            // line 339
            echo "        ";
            if (($context["show_credit_link"] ?? null)) {
                // line 340
                echo "          <!-- Start: Credit Link -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-right-align w3-opacity w3-hover-opacity-off\">Designed by: <a href=\"http://www.flashwebcenter.com\" title=\"Flash Web Center LLC\" target=\"_blank\">Flash Web Center LLC</a></p>
          </div>
          <!-- End: Credit Link -->
        ";
            }
            // line 346
            echo "      </div>
    </div>
    <!-- End: Copyright -->
  ";
        }
        // line 350
        echo "</div>
<!-- End: Page Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/d8w3css/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  783 => 350,  777 => 346,  769 => 340,  766 => 339,  759 => 335,  755 => 333,  753 => 332,  749 => 331,  745 => 330,  742 => 329,  739 => 328,  729 => 321,  725 => 319,  720 => 316,  714 => 314,  711 => 313,  705 => 311,  702 => 310,  696 => 308,  693 => 307,  687 => 305,  684 => 304,  678 => 302,  675 => 301,  669 => 299,  666 => 298,  660 => 296,  657 => 295,  651 => 293,  648 => 292,  642 => 290,  640 => 289,  636 => 287,  634 => 286,  630 => 285,  626 => 284,  623 => 283,  620 => 282,  614 => 278,  606 => 273,  602 => 272,  596 => 271,  593 => 270,  590 => 269,  582 => 264,  578 => 263,  572 => 262,  569 => 261,  566 => 260,  558 => 255,  554 => 254,  548 => 253,  545 => 252,  543 => 251,  538 => 249,  534 => 248,  531 => 247,  528 => 246,  525 => 245,  519 => 241,  511 => 236,  507 => 235,  501 => 234,  498 => 233,  495 => 232,  487 => 227,  483 => 226,  477 => 225,  474 => 224,  471 => 223,  463 => 218,  459 => 217,  453 => 216,  450 => 215,  447 => 214,  439 => 209,  435 => 208,  429 => 207,  426 => 206,  424 => 205,  420 => 204,  416 => 203,  413 => 202,  410 => 201,  408 => 200,  401 => 195,  393 => 190,  389 => 189,  383 => 188,  380 => 187,  377 => 186,  369 => 181,  365 => 180,  359 => 179,  356 => 178,  353 => 177,  345 => 172,  341 => 171,  335 => 170,  332 => 169,  330 => 168,  326 => 166,  319 => 162,  315 => 161,  312 => 160,  310 => 159,  306 => 158,  302 => 157,  299 => 156,  291 => 151,  287 => 150,  283 => 149,  280 => 148,  277 => 147,  274 => 146,  268 => 142,  260 => 137,  256 => 136,  250 => 135,  247 => 134,  244 => 133,  236 => 128,  232 => 127,  226 => 126,  223 => 125,  220 => 124,  212 => 119,  208 => 118,  202 => 117,  199 => 116,  197 => 115,  192 => 113,  188 => 112,  185 => 111,  182 => 110,  179 => 109,  171 => 104,  167 => 103,  163 => 102,  160 => 101,  157 => 100,  149 => 95,  145 => 94,  141 => 93,  138 => 92,  135 => 91,  127 => 86,  123 => 85,  119 => 84,  113 => 83,  110 => 82,  108 => 81,  103 => 78,  97 => 76,  94 => 75,  88 => 73,  86 => 72,  82 => 71,  76 => 70,  71 => 68,  68 => 67,  60 => 62,  56 => 61,  49 => 59,  46 => 58,  43 => 57,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/d8w3css/templates/layout/page.html.twig", "/Users/Hannes/Documents/development/htdocs/drupal3/themes/d8w3css/templates/layout/page.html.twig");
    }
}
