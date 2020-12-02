<?php
unlink(MODX_CORE_PATH . 'packages/modx2-2.8.0-patch-1.0.3-pl.transport.zip');
if ($cache = $transport->xpdo->getCacheManager()) {
    $cache->deleteTree(MODX_CORE_PATH . 'packages/modx2-2.8.0-patch-1.0.3-pl/', ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]);
}