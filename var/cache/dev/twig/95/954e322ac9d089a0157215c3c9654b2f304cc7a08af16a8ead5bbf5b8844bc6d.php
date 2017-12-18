<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b47ad4bcf27d388f919aa4d02f72b8c3735308a48f90ff9af33b7ca84fd3b1a5 extends Twig_Template
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
        $__internal_626299299802d0fc159985d781c4e16642a16ba5775dce14de4d5618b13e7fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626299299802d0fc159985d781c4e16642a16ba5775dce14de4d5618b13e7fcf->enter($__internal_626299299802d0fc159985d781c4e16642a16ba5775dce14de4d5618b13e7fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_311e1bc61d0a28d73060f8771555e897f4dec67fec14aad26fd95e1b51a7ce94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311e1bc61d0a28d73060f8771555e897f4dec67fec14aad26fd95e1b51a7ce94->enter($__internal_311e1bc61d0a28d73060f8771555e897f4dec67fec14aad26fd95e1b51a7ce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_626299299802d0fc159985d781c4e16642a16ba5775dce14de4d5618b13e7fcf->leave($__internal_626299299802d0fc159985d781c4e16642a16ba5775dce14de4d5618b13e7fcf_prof);

        
        $__internal_311e1bc61d0a28d73060f8771555e897f4dec67fec14aad26fd95e1b51a7ce94->leave($__internal_311e1bc61d0a28d73060f8771555e897f4dec67fec14aad26fd95e1b51a7ce94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
