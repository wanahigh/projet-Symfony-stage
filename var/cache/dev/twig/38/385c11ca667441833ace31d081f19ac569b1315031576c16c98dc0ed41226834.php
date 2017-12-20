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
        $__internal_8a79a0d41b56499c1e0705c4a7830c036421a1e1885f631e67bbbd126b844698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a79a0d41b56499c1e0705c4a7830c036421a1e1885f631e67bbbd126b844698->enter($__internal_8a79a0d41b56499c1e0705c4a7830c036421a1e1885f631e67bbbd126b844698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_beb5127860b37fbd9f554917989d907db02493575faa58c873fd182f0ea17d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb5127860b37fbd9f554917989d907db02493575faa58c873fd182f0ea17d79->enter($__internal_beb5127860b37fbd9f554917989d907db02493575faa58c873fd182f0ea17d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8a79a0d41b56499c1e0705c4a7830c036421a1e1885f631e67bbbd126b844698->leave($__internal_8a79a0d41b56499c1e0705c4a7830c036421a1e1885f631e67bbbd126b844698_prof);

        
        $__internal_beb5127860b37fbd9f554917989d907db02493575faa58c873fd182f0ea17d79->leave($__internal_beb5127860b37fbd9f554917989d907db02493575faa58c873fd182f0ea17d79_prof);

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
