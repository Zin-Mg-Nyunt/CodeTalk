/**
 * This configuration was generated using the CKEditor 5 Builder. You can modify it anytime using this link:
 * https://ckeditor.com/ckeditor-5/builder/?redirect=portal#installation/NoJgNARCB0Ac0gpAjAdgKwGYAMBOfALLnvrCLJqmagZgGyaYjazq4iom6ywHZIQApgDsk2MMGRhx4qVOwBdSADMQITL0wQFQA===
 */

const {
    ClassicEditor,
    Autosave,
    Essentials,
    Paragraph,
    Autoformat,
    TextTransformation,
    LinkImage,
    Link,
    ImageBlock,
    ImageToolbar,
    BlockQuote,
    Bold,
    Bookmark,
    CloudServices,
    ImageUpload,
    ImageInsertViaUrl,
    AutoImage,
    TableColumnResize,
    Table,
    TableToolbar,
    Emoji,
    Mention,
    PasteFromOffice,
    FindAndReplace,
    FontBackgroundColor,
    FontColor,
    FontFamily,
    FontSize,
    Fullscreen,
    Heading,
    Highlight,
    HorizontalLine,
    ImageTextAlternative,
    ImageCaption,
    ImageResize,
    ImageStyle,
    Indent,
    IndentBlock,
    Code,
    ImageInline,
    Italic,
    AutoLink,
    ListProperties,
    List,
    ImageUtils,
    ImageEditing,
    PageBreak,
    RemoveFormat,
    SpecialCharactersArrows,
    SpecialCharacters,
    SpecialCharactersCurrency,
    SpecialCharactersEssentials,
    SpecialCharactersLatin,
    SpecialCharactersMathematical,
    SpecialCharactersText,
    Strikethrough,
    Style,
    GeneralHtmlSupport,
    Subscript,
    Superscript,
    TableCaption,
    TableCellProperties,
    TableProperties,
    Alignment,
    TodoList,
    Underline,
} = window.CKEDITOR;
const { ExportPdf, ExportWord } = window.CKEDITOR_PREMIUM_FEATURES;

const LICENSE_KEY =
    "eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3ODExMzU5OTksImp0aSI6IjU0YzkzZDU0LWMzNzItNGEyNi1iMGJjLWE4Y2MwMGQ4MGZlMCIsImxpY2Vuc2VkSG9zdHMiOlsiMTI3LjAuMC4xIiwibG9jYWxob3N0IiwiMTkyLjE2OC4qLioiLCIxMC4qLiouKiIsIjE3Mi4qLiouKiIsIioudGVzdCIsIioubG9jYWxob3N0IiwiKi5sb2NhbCJdLCJ1c2FnZUVuZHBvaW50IjoiaHR0cHM6Ly9wcm94eS1ldmVudC5ja2VkaXRvci5jb20iLCJkaXN0cmlidXRpb25DaGFubmVsIjpbImNsb3VkIiwiZHJ1cGFsIl0sImxpY2Vuc2VUeXBlIjoiZGV2ZWxvcG1lbnQiLCJmZWF0dXJlcyI6WyJEUlVQIiwiRTJQIiwiRTJXIl0sInZjIjoiNzc2Mjg2ZTQifQ.te8pA1oNeq3HhtRuD1ZHNP30K7kr6DyQW4MclckOjwRxLgSa4P9MxndnYlz9BCnZMNlBkqCIshp8W0K0ug6IGA";

const editorConfig = {
    toolbar: {
        items: [
            "undo",
            "redo",
            "|",
            "heading",
            "style",
            "|",
            "fontSize",
            "fontFamily",
            "fontColor",
            "fontBackgroundColor",
            "|",
            "bold",
            "italic",
            "underline",
            "|",
            "link",
            "insertTable",
            "highlight",
            "blockQuote",
            "|",
            "alignment",
            "|",
            "bulletedList",
            "numberedList",
            "todoList",
            "outdent",
            "indent",
        ],
        shouldNotGroupWhenFull: false,
    },
    plugins: [
        Alignment,
        Autoformat,
        AutoImage,
        AutoLink,
        Autosave,
        BlockQuote,
        Bold,
        Bookmark,
        CloudServices,
        Code,
        Emoji,
        Essentials,
        ExportPdf,
        ExportWord,
        FindAndReplace,
        FontBackgroundColor,
        FontColor,
        FontFamily,
        FontSize,
        Fullscreen,
        GeneralHtmlSupport,
        Heading,
        Highlight,
        HorizontalLine,
        ImageBlock,
        ImageCaption,
        ImageEditing,
        ImageInline,
        ImageInsertViaUrl,
        ImageResize,
        ImageStyle,
        ImageTextAlternative,
        ImageToolbar,
        ImageUpload,
        ImageUtils,
        Indent,
        IndentBlock,
        Italic,
        Link,
        LinkImage,
        List,
        ListProperties,
        Mention,
        PageBreak,
        Paragraph,
        PasteFromOffice,
        RemoveFormat,
        SpecialCharacters,
        SpecialCharactersArrows,
        SpecialCharactersCurrency,
        SpecialCharactersEssentials,
        SpecialCharactersLatin,
        SpecialCharactersMathematical,
        SpecialCharactersText,
        Strikethrough,
        Style,
        Subscript,
        Superscript,
        Table,
        TableCaption,
        TableCellProperties,
        TableColumnResize,
        TableProperties,
        TableToolbar,
        TextTransformation,
        TodoList,
        Underline,
    ],
    exportPdf: {
        stylesheets: [
            /* This path should point to the content stylesheets on your assets server. */
            /* See: https://ckeditor.com/docs/ckeditor5/latest/features/converters/export-pdf.html */
            "./style.css",
            /* Export PDF needs access to stylesheets that style the content. */
            "https://cdn.ckeditor.com/ckeditor5/47.2.0/ckeditor5.css",
            "https://cdn.ckeditor.com/ckeditor5-premium-features/47.2.0/ckeditor5-premium-features.css",
        ],
        fileName: "export-pdf-demo.pdf",
        converterOptions: {
            format: "Tabloid",
            margin_top: "20mm",
            margin_bottom: "20mm",
            margin_right: "24mm",
            margin_left: "24mm",
            page_orientation: "portrait",
        },
    },
    exportWord: {
        stylesheets: [
            /* This path should point to the content stylesheets on your assets server. */
            /* See: https://ckeditor.com/docs/ckeditor5/latest/features/converters/export-word.html */
            "./style.css",
            /* Export Word needs access to stylesheets that style the content. */
            "https://cdn.ckeditor.com/ckeditor5/47.2.0/ckeditor5.css",
            "https://cdn.ckeditor.com/ckeditor5-premium-features/47.2.0/ckeditor5-premium-features.css",
        ],
        fileName: "export-word-demo.docx",
        converterOptions: {
            document: {
                orientation: "portrait",
                size: "Tabloid",
                margins: {
                    top: "20mm",
                    bottom: "20mm",
                    right: "24mm",
                    left: "24mm",
                },
            },
        },
    },
    fontFamily: {
        supportAllValues: true,
    },
    fontSize: {
        options: [10, 12, 14, "default", 18, 20, 22],
        supportAllValues: true,
    },
    fullscreen: {
        onEnterCallback: (container) =>
            container.classList.add(
                "editor-container",
                "editor-container_classic-editor",
                "editor-container_include-style",
                "editor-container_include-fullscreen",
                "main-container"
            ),
    },
    heading: {
        options: [
            {
                model: "paragraph",
                title: "Paragraph",
                class: "ck-heading_paragraph",
            },
            {
                model: "heading1",
                view: "h1",
                title: "Heading 1",
                class: "ck-heading_heading1",
            },
            {
                model: "heading2",
                view: "h2",
                title: "Heading 2",
                class: "ck-heading_heading2",
            },
            {
                model: "heading3",
                view: "h3",
                title: "Heading 3",
                class: "ck-heading_heading3",
            },
            {
                model: "heading4",
                view: "h4",
                title: "Heading 4",
                class: "ck-heading_heading4",
            },
            {
                model: "heading5",
                view: "h5",
                title: "Heading 5",
                class: "ck-heading_heading5",
            },
            {
                model: "heading6",
                view: "h6",
                title: "Heading 6",
                class: "ck-heading_heading6",
            },
        ],
    },
    htmlSupport: {
        allow: [
            {
                name: /^.*$/,
                styles: true,
                attributes: true,
                classes: true,
            },
        ],
    },
    image: {
        toolbar: [
            "toggleImageCaption",
            "imageTextAlternative",
            "|",
            "imageStyle:inline",
            "imageStyle:wrapText",
            "imageStyle:breakText",
            "|",
            "resizeImage",
        ],
    },
    licenseKey: LICENSE_KEY,
    link: {
        addTargetToExternalLinks: true,
        defaultProtocol: "https://",
        decorators: {
            toggleDownloadable: {
                mode: "manual",
                label: "Downloadable",
                attributes: {
                    download: "file",
                },
            },
        },
    },
    list: {
        properties: {
            styles: true,
            startIndex: true,
            reversed: true,
        },
    },
    mention: {
        feeds: [
            {
                marker: "@",
                feed: [
                    /* See: https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html */
                ],
            },
        ],
    },
    menuBar: {
        isVisible: true,
    },
    placeholder: "Type or paste your content here!",
    style: {
        definitions: [
            {
                name: "Article category",
                element: "h3",
                classes: ["category"],
            },
            {
                name: "Title",
                element: "h2",
                classes: ["document-title"],
            },
            {
                name: "Subtitle",
                element: "h3",
                classes: ["document-subtitle"],
            },
            {
                name: "Info box",
                element: "p",
                classes: ["info-box"],
            },
            {
                name: "CTA Link Primary",
                element: "a",
                classes: ["button", "button--green"],
            },
            {
                name: "CTA Link Secondary",
                element: "a",
                classes: ["button", "button--black"],
            },
            {
                name: "Marker",
                element: "span",
                classes: ["marker"],
            },
            {
                name: "Spoiler",
                element: "span",
                classes: ["spoiler"],
            },
        ],
    },
    table: {
        contentToolbar: [
            "tableColumn",
            "tableRow",
            "mergeTableCells",
            "tableProperties",
            "tableCellProperties",
        ],
    },
};

configUpdateAlert(editorConfig);

ClassicEditor.create(document.querySelector(".editor"), editorConfig);

/**
 * This function exists to remind you to update the config needed for premium features.
 * The function can be safely removed. Make sure to also remove call to this function when doing so.
 */
function configUpdateAlert(config) {
    if (configUpdateAlert.configUpdateAlertShown) {
        return;
    }

    const isModifiedByUser = (currentValue, forbiddenValue) => {
        if (currentValue === forbiddenValue) {
            return false;
        }

        if (currentValue === undefined) {
            return false;
        }

        return true;
    };

    const valuesToUpdate = [];

    configUpdateAlert.configUpdateAlertShown = true;

    if (!isModifiedByUser(config.licenseKey, "<YOUR_LICENSE_KEY>")) {
        valuesToUpdate.push("LICENSE_KEY");
    }

    if (valuesToUpdate.length) {
        window.alert(
            [
                "Please update the following values in your editor config",
                "to receive full access to Premium Features:",
                "",
                ...valuesToUpdate.map((value) => ` - ${value}`),
            ].join("\n")
        );
    }
}
