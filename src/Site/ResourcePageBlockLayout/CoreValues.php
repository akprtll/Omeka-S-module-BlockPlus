namespace Site\ResourcePageBlockLayout;

use Omeka\Site\ResourcePageBlockLayout\AbstractResourcePageBlockLayout;

class CoreValues extends AbstractResourcePageBlockLayout
{
    public function getLabel()
    {
        return 'Core Values';
    }

    public function getTemplate()
    {
        return 'common/resource-page-block-layout/core-values';
    }
}
