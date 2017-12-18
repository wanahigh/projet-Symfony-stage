<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c09c65e749ddb5e5503aa8ace49b9c164a1635795f580df8248d2740dab027df extends Twig_Template
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
        $__internal_286ab732b6e4710979236a07d3eb5c96745800db0b8dc24ab94ebb2e9d043acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286ab732b6e4710979236a07d3eb5c96745800db0b8dc24ab94ebb2e9d043acf->enter($__internal_286ab732b6e4710979236a07d3eb5c96745800db0b8dc24ab94ebb2e9d043acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_0dce7a55414fb7129b65f0267a7e3909cab282f782d5788f11bf67470a91e1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dce7a55414fb7129b65f0267a7e3909cab282f782d5788f11bf67470a91e1b2->enter($__internal_0dce7a55414fb7129b65f0267a7e3909cab282f782d5788f11bf67470a91e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_286ab732b6e4710979236a07d3eb5c96745800db0b8dc24ab94ebb2e9d043acf->leave($__internal_286ab732b6e4710979236a07d3eb5c96745800db0b8dc24ab94ebb2e9d043acf_prof);

        
        $__internal_0dce7a55414fb7129b65f0267a7e3909cab282f782d5788f11bf67470a91e1b2->leave($__internal_0dce7a55414fb7129b65f0267a7e3909cab282f782d5788f11bf67470a91e1b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
