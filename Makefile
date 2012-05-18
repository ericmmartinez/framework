LESSC = lessc

CSS_FILES = \
	css/grid.css

JS_FILES = \
	js/test.min.js
	
.PHONY: css js

all: js css

js: $(JS_FILES)

css: $(CSS_FILES)

%.css: %.less
	$(LESSC) $< > $@

%.min.js: %.js
	cp $< $@

# 1-off rules for combined files
js/template.min.js: $(JS_FILES)
	cat $(JS_FILES) > $@

css/template.less: $(CSS_FILES)
	cat $(CSS_FILES) > $@

clean:
	rm -vf $(CSS_FILES)
	rm -vf $(JS_FILES)
	rm -vf css/template.css css/template.less js/template.min.js

