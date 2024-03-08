<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* woocommerce/settings_overlay.html */
class __TwigTemplate_ef7b4a33f7875a0b3cdff1d2183c467f61d9fb613d647496318ad6a7aea84467 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<style>
  /* Hide WooCommerce section with template styling */
  #email_template_options-description + .form-table {
    opacity: 0.2;
    pointer-events: none;
  }

  /* Position MailPoet buttons over hidden table */
  .mailpoet-woocommerce-email-overlay {
    bottom: 320px;
    left: 0;
    max-width: 100%;
    text-align: left;
    position: absolute;
    text-align: center;
    width: 640px;
    z-index: 1;
  }
</style>

<div class=\"mailpoet-woocommerce-email-overlay\">
  <a class=\"button button-primary\"
    href=\"?page=mailpoet-newsletter-editor&id=";
        // line 23
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["woocommerce_template_id"] ?? null), "html", null, true);
        echo "\"
    data-automation-id=\"mailpoet_woocommerce_customize\"
  >
  \t";
        // line 26
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Customize with MailPoet", "Button in WooCommerce settings page");
        echo "
  </a>
  <br>
  <br>
  <a href=\"?page=mailpoet-settings#woocommerce\" data-automation-id=\"mailpoet_woocommerce_disable\">
    ";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Disable MailPoet customizer", "Link from WooCommerce plugin to MailPoet");
        echo "
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "woocommerce/settings_overlay.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 31,  60 => 26,  54 => 23,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "woocommerce/settings_overlay.html", "/home/astrogeo/public_html/wp-content/plugins/mailpoet/views/woocommerce/settings_overlay.html");
    }
}
