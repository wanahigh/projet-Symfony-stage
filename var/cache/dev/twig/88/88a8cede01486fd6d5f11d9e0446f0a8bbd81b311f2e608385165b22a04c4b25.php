<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f99e02fe4a229633f2654944d416bc22a84dd54593204dce3594ac26214ddfc4 extends Twig_Template
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
        $__internal_eb24e7f8a1cc2faf4ce0cdb07f53ff82a076b08b3e81818a2d53c79672a0cc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb24e7f8a1cc2faf4ce0cdb07f53ff82a076b08b3e81818a2d53c79672a0cc21->enter($__internal_eb24e7f8a1cc2faf4ce0cdb07f53ff82a076b08b3e81818a2d53c79672a0cc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_9330637f11ab56fedd182ef9041052cbe136dea7f4defc47911f1affe7d1ee66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9330637f11ab56fedd182ef9041052cbe136dea7f4defc47911f1affe7d1ee66->enter($__internal_9330637f11ab56fedd182ef9041052cbe136dea7f4defc47911f1affe7d1ee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_eb24e7f8a1cc2faf4ce0cdb07f53ff82a076b08b3e81818a2d53c79672a0cc21->leave($__internal_eb24e7f8a1cc2faf4ce0cdb07f53ff82a076b08b3e81818a2d53c79672a0cc21_prof);

        
        $__internal_9330637f11ab56fedd182ef9041052cbe136dea7f4defc47911f1affe7d1ee66->leave($__internal_9330637f11ab56fedd182ef9041052cbe136dea7f4defc47911f1affe7d1ee66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
