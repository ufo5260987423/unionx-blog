(ns blog.handler
  (:gen-class)
  (:use compojure.core
        ring.adapter.jetty)
  (:require [compojure.handler :as handler]
            [compojure.route :as route]))

(defroutes app-routes
  (GET "/" [] "Hello World")
  (route/resources "/")
  (route/not-found "Not Found"))

(def app
  (handler/site app-routes))

(defn -main [& args]
  (run-jetty app-routes
             {:host (get (System/getenv) "HOST" "127.0.0.1")
              :port (Integer. (get (System/getenv) "PORT" "8080"))}))
