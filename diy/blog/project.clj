(defproject blog "0.1.0-SNAPSHOT"
  :description "FIXME: write description"
  :url "http://example.com/FIXME"
  :dependencies [[org.clojure/clojure "1.5.1"]
                 [compojure "1.1.5"]
                 [enlive "1.1.1"]
                 [ring "1.1.8"]]
  :main blog.handler
  :plugins [[lein-ring "0.8.5"]]
  :ring {:handler blog.handler/app}
  :profiles
  {:dev {:dependencies [[ring-mock "0.1.5"]]}})
