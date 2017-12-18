<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb70bc6eca82c333dfbd999d063010847510bbd37c5cacd51064d85a161254e0 extends Twig_Template
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
        $__internal_56760724936c8034a0fa9b6888b825ba6f406c83713a84dc31f37f2335301f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56760724936c8034a0fa9b6888b825ba6f406c83713a84dc31f37f2335301f21->enter($__internal_56760724936c8034a0fa9b6888b825ba6f406c83713a84dc31f37f2335301f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ee17c45785880665cd7ada50155680af0b3e5028781fd58df4c5dc687e07433e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee17c45785880665cd7ada50155680af0b3e5028781fd58df4c5dc687e07433e->enter($__internal_ee17c45785880665cd7ada50155680af0b3e5028781fd58df4c5dc687e07433e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_56760724936c8034a0fa9b6888b825ba6f406c83713a84dc31f37f2335301f21->leave($__internal_56760724936c8034a0fa9b6888b825ba6f406c83713a84dc31f37f2335301f21_prof);

        
        $__internal_ee17c45785880665cd7ada50155680af0b3e5028781fd58df4c5dc687e07433e->leave($__internal_ee17c45785880665cd7ada50155680af0b3e5028781fd58df4c5dc687e07433e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
