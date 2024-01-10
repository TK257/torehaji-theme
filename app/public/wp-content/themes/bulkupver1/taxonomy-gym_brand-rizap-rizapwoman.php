Html Webpack Plugin:
<pre>
  Error: Child compilation failed:
  Module not found: Error: Can't resolve '/Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/src/pug/taxonomy-gym_brand-rizap-rizapwoman.p  ug' in '/Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1'
  ModuleNotFoundError: Module not found: Error: Can't resolve '/Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/src/pug/taxonomy-gym_bra  nd-rizap-rizapwoman.pug' in '/Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1'
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/webpack/lib/Compilation.js:2004:28
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/webpack/lib/NormalModuleFactory.js:795:13
      at eval (eval at create (/Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/tapable/lib/HookCodeFactory.js:33:10), <ano  nymous>:10:1)
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/webpack/lib/NormalModuleFactory.js:275:22
      at eval (eval at create (/Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/tapable/lib/HookCodeFactory.js:33:10), <ano  nymous>:9:1)
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/webpack/lib/NormalModuleFactory.js:431:22
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/webpack/lib/NormalModuleFactory.js:124:11
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/webpack/lib/NormalModuleFactory.js:667:25
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/webpack/lib/NormalModuleFactory.js:852:8
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/webpack/lib/NormalModuleFactory.js:972:5
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/neo-async/async.js:6883:13
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/webpack/lib/NormalModuleFactory.js:955:45
      at finishWithoutResolve (/Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/enhanced-resolve/lib/Resolver.js:296:11)
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/enhanced-resolve/lib/Resolver.js:362:15
      at /Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/enhanced-resolve/lib/Resolver.js:410:5
      at eval (eval at create (/Users/takeomachino/開発環境/BULK-UP/app/public/wp-content/themes/bulkupver1/node_modules/tapable/lib/HookCodeFactory.js:33:10), <ano  nymous>:16:1)
  
  - Compilation.js:2004 
    [bulkupver1]/[webpack]/lib/Compilation.js:2004:28
  
  - NormalModuleFactory.js:795 
    [bulkupver1]/[webpack]/lib/NormalModuleFactory.js:795:13
  
  
  - NormalModuleFactory.js:275 
    [bulkupver1]/[webpack]/lib/NormalModuleFactory.js:275:22
  
  
  - NormalModuleFactory.js:431 
    [bulkupver1]/[webpack]/lib/NormalModuleFactory.js:431:22
  
  - NormalModuleFactory.js:124 
    [bulkupver1]/[webpack]/lib/NormalModuleFactory.js:124:11
  
  - NormalModuleFactory.js:667 
    [bulkupver1]/[webpack]/lib/NormalModuleFactory.js:667:25
  
  - NormalModuleFactory.js:852 
    [bulkupver1]/[webpack]/lib/NormalModuleFactory.js:852:8
  
  - NormalModuleFactory.js:972 
    [bulkupver1]/[webpack]/lib/NormalModuleFactory.js:972:5
  
  - async.js:6883 
    [bulkupver1]/[neo-async]/async.js:6883:13
  
  - NormalModuleFactory.js:955 
    [bulkupver1]/[webpack]/lib/NormalModuleFactory.js:955:45
  
  - Resolver.js:296 finishWithoutResolve
    [bulkupver1]/[enhanced-resolve]/lib/Resolver.js:296:11
  
  - Resolver.js:362 
    [bulkupver1]/[enhanced-resolve]/lib/Resolver.js:362:15
  
  - Resolver.js:410 
    [bulkupver1]/[enhanced-resolve]/lib/Resolver.js:410:5
  
  
  - child-compiler.js:169 
    [bulkupver1]/[html-webpack-plugin]/lib/child-compiler.js:169:18
  
  - Compiler.js:557 
    [bulkupver1]/[webpack]/lib/Compiler.js:557:11
  
  - Compiler.js:1127 
    [bulkupver1]/[webpack]/lib/Compiler.js:1127:17
  
  
  - Hook.js:18 Hook.CALL_ASYNC_DELEGATE [as _callAsync]
    [bulkupver1]/[tapable]/lib/Hook.js:18:14
  
  - Compiler.js:1123 
    [bulkupver1]/[webpack]/lib/Compiler.js:1123:33
  
  - Compilation.js:2772 finalCallback
    [bulkupver1]/[webpack]/lib/Compilation.js:2772:11
  
  - Compilation.js:3073 
    [bulkupver1]/[webpack]/lib/Compilation.js:3073:11
  
  
  - Hook.js:18 Hook.CALL_ASYNC_DELEGATE [as _callAsync]
    [bulkupver1]/[tapable]/lib/Hook.js:18:14
  
  - Compilation.js:3066 
    [bulkupver1]/[webpack]/lib/Compilation.js:3066:38
  
  
  - Compilation.js:517 
    [bulkupver1]/[webpack]/lib/Compilation.js:517:10
  
  - SourceMapDevToolPlugin.js:549 
    [bulkupver1]/[webpack]/lib/SourceMapDevToolPlugin.js:549:10
  
  - async.js:2830 
    [bulkupver1]/[neo-async]/async.js:2830:7
  
  - async.js:2857 Object.each
    [bulkupver1]/[neo-async]/async.js:2857:9
  
</pre>