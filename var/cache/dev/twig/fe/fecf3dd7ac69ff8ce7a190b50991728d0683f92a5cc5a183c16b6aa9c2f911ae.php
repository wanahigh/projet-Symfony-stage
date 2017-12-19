<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2bce84114d955adafb80988aa6e6c11f4b07d5a44754459049f19bbf92a04438 extends Twig_Template
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
        $__internal_06363d8fd58afa35b95f9c1cbfe68f08710ab6c5a041b65100a429c68a664dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06363d8fd58afa35b95f9c1cbfe68f08710ab6c5a041b65100a429c68a664dfb->enter($__internal_06363d8fd58afa35b95f9c1cbfe68f08710ab6c5a041b65100a429c68a664dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7d9d194bbb2c6a6589c464a133e1980051913dd943d2fc4e7632dadcfccac56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9d194bbb2c6a6589c464a133e1980051913dd943d2fc4e7632dadcfccac56a->enter($__internal_7d9d194bbb2c6a6589c464a133e1980051913dd943d2fc4e7632dadcfccac56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_06363d8fd58afa35b95f9c1cbfe68f08710ab6c5a041b65100a429c68a664dfb->leave($__internal_06363d8fd58afa35b95f9c1cbfe68f08710ab6c5a041b65100a429c68a664dfb_prof);

        
        $__internal_7d9d194bbb2c6a6589c464a133e1980051913dd943d2fc4e7632dadcfccac56a->leave($__internal_7d9d194bbb2c6a6589c464a133e1980051913dd943d2fc4e7632dadcfccac56a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
