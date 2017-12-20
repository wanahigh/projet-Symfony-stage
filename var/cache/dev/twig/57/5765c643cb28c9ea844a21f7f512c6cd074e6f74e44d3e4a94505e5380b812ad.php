<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c41015bd356336e1d51cc7fc6517077d2a25a1cd036a98a187e57101a5b17586 extends Twig_Template
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
        $__internal_7409a4ce447916015e655d69b81cabe5cedda7c2c7bcc2bbe81dce4200f12b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7409a4ce447916015e655d69b81cabe5cedda7c2c7bcc2bbe81dce4200f12b1b->enter($__internal_7409a4ce447916015e655d69b81cabe5cedda7c2c7bcc2bbe81dce4200f12b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a5b8e144f1fb1806175a38528b7c8cb03c3bf47eba2987e0cf167ceec84af9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b8e144f1fb1806175a38528b7c8cb03c3bf47eba2987e0cf167ceec84af9d9->enter($__internal_a5b8e144f1fb1806175a38528b7c8cb03c3bf47eba2987e0cf167ceec84af9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7409a4ce447916015e655d69b81cabe5cedda7c2c7bcc2bbe81dce4200f12b1b->leave($__internal_7409a4ce447916015e655d69b81cabe5cedda7c2c7bcc2bbe81dce4200f12b1b_prof);

        
        $__internal_a5b8e144f1fb1806175a38528b7c8cb03c3bf47eba2987e0cf167ceec84af9d9->leave($__internal_a5b8e144f1fb1806175a38528b7c8cb03c3bf47eba2987e0cf167ceec84af9d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
