<?php

/* BloggerBlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_685781c545f1694220f09947e98ffd93ac9c228c2a70867146a5f56877151a51 extends Twig_Template
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
        // line 2
        echo "A contact enquiry was made by ";
        echo $this->getAttribute($this->getContext($context, "enquiry"), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 4
        echo $this->getAttribute($this->getContext($context, "enquiry"), "email", array());
        echo "
Subject: ";
        // line 5
        echo $this->getAttribute($this->getContext($context, "enquiry"), "subject", array());
        echo "
Body:
";
        // line 7
        echo $this->getAttribute($this->getContext($context, "enquiry"), "body", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 5,  27 => 4,  19 => 2,);
    }
}
