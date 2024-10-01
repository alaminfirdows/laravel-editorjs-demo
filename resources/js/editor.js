import EditorJS from "@editorjs/editorjs";
import Header from "@editorjs/header";
import List from "@editorjs/list";
import LinkTool from "@editorjs/link";
import Quote from "@editorjs/quote";
import RawTool from "@editorjs/raw";
import SimpleImage from "@editorjs/simple-image";
import Checklist from "@editorjs/checklist";
import Embed from "@editorjs/embed";

window.addEventListener("DOMContentLoaded", (event) => {
    const data = JSON.parse(document.getElementById("blocks").value || "{}");

    const editor = new EditorJS({
        holder: "editorjs",

        tools: {
            // header
            header: Header,

            // list
            list: {
                class: List,
                inlineToolbar: true,
                config: {
                    defaultStyle: "unordered",
                },
            },

            // link
            linkTool: {
                class: LinkTool,
                config: {
                    endpoint: "http://localhost:8000/fetch-url", // Your backend endpoint for url data fetching,
                },
            },

            // quote
            quote: Quote,

            // raw
            raw: RawTool,

            // image
            image: SimpleImage,

            // checklist
            checklist: {
                class: Checklist,
                inlineToolbar: true,
            },

            // embed
            embed: Embed,
        },

        onChange: function () {
            editor
                .save()
                .then((data) => {
                    document.getElementById("blocks").value =
                        JSON.stringify(data);
                })
                .catch((error) => {
                    console.error("Saving failed: ", error);
                });
        },

        data: data,
    });

    window.editor = editor;
});
