oc login mepley-demo.redhatgov.io -u admin -p Redhat1!

oc get project status || oc new-project status

oc new-app https://github.com/michaelepley/ocktoberfest.git --context-dir=status

oc expose svc/ocktoberfest

# go to https://bit.ly/2MJ5SNz 